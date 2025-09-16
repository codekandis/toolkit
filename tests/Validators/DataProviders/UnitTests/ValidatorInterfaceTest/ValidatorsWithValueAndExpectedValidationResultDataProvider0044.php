<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0044 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			44000 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44001 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44002 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44003 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44004 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44005 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44006 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44007 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44008 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44009 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44010 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44011 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44012 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44013 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44014 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44015 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44016 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44017 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44018 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44019 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44020 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44021 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44022 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44023 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44024 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44025 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44026 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44027 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44028 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44029 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44030 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44031 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44032 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44033 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44034 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44035 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44036 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44037 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44038 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44039 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44040 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44041 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44042 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44043 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44044 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44045 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44046 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44047 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44048 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44049 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44050 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44051 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44052 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44053 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44054 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44055 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44056 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44057 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44058 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44059 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44060 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44061 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44062 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44063 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44064 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44065 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44066 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44067 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44068 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44069 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44070 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44071 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44072 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44073 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44074 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44075 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44076 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44077 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44078 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44079 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44080 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44081 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44082 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44083 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44084 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44085 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44086 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44087 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44088 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44089 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44090 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44091 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44092 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44093 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44094 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44095 => [
				'validator'                => new IsInstanceOfValidator( Values::INTEGER_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44096 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44097 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44098 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44099 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44100 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44101 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44102 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44103 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44104 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44105 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44106 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44107 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44108 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44109 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44110 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44111 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44112 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44113 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44114 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44115 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44116 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44117 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44118 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44119 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44120 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44121 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44122 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44123 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44124 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44125 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44126 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44127 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44128 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44129 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44130 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44131 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44132 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44133 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44134 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44135 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44136 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44137 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44138 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44139 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44140 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44141 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44142 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44143 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44144 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44145 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44146 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44147 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44148 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44149 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44150 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44151 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44152 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44153 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44154 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44155 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44156 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44157 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44158 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44159 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44160 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44161 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44162 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44163 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44164 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44165 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44166 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44167 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44168 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44169 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44170 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44171 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44172 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44173 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44174 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44175 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44176 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44177 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44178 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44179 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44180 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44181 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44182 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44183 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44184 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44185 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44186 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44187 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44188 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44189 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44190 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44191 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44192 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44193 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44194 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44195 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44196 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44197 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44198 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44199 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			44200 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44201 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44202 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44203 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44204 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44205 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44206 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44207 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44208 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44209 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44210 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44211 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44212 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44213 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44214 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44215 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44216 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44217 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44218 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44219 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44220 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44221 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44222 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44223 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44224 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44225 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44226 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44227 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44228 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44229 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44230 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44231 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44232 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44233 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44234 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44235 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44236 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44237 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44238 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44239 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44240 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44241 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44242 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44243 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44244 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44245 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44246 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44247 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44248 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44249 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44250 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44251 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44252 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44253 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44254 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44255 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44256 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44257 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44258 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44259 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44260 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44261 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44262 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44263 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44264 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44265 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44266 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44267 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44268 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44269 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44270 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44271 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44272 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44273 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44274 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44275 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44276 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44277 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44278 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44279 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44280 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44281 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44282 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44283 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44284 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44285 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44286 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44287 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44288 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44289 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44290 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44291 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44292 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44293 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44294 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44295 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44296 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44297 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44298 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44299 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44300 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44301 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44302 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44303 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44304 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44305 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44306 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44307 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44308 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44309 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44310 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44311 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44312 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44313 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44314 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44315 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44316 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44317 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44318 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44319 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44320 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44321 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44322 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44323 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44324 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44325 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44326 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44327 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44328 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44329 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44330 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44331 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44332 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44333 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44334 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44335 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44336 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44337 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44338 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44339 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44340 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44341 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44342 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44343 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44344 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44345 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44346 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44347 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44348 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44349 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44350 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44351 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44352 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44353 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44354 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44355 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44356 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44357 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44358 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44359 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44360 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44361 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44362 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44363 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44364 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44365 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44366 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44367 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44368 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44369 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44370 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44371 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44372 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44373 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44374 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44375 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44376 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44377 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44378 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44379 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44380 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44381 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44382 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44383 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44384 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44385 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44386 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44387 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44388 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44389 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44390 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44391 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44392 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44393 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44394 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44395 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44396 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44397 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44398 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44399 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44400 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44401 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44402 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44403 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44404 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44405 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44406 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44407 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44408 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			44409 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44410 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44411 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44412 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44413 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44414 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44415 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44416 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44417 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44418 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44419 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44420 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44421 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44422 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44423 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44424 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44425 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44426 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44427 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44428 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44429 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44430 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44431 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44432 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44433 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44434 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44435 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44436 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44437 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44438 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44439 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44440 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44441 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44442 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44443 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44444 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44445 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44446 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44447 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44448 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44449 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44450 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44451 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44452 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44453 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44454 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44455 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44456 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44457 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44458 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44459 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44460 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44461 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44462 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44463 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44464 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44465 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44466 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44467 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44468 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44469 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44470 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44471 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44472 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44473 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44474 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44475 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44476 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44477 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44478 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44479 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44480 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44481 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44482 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44483 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44484 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44485 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44486 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44487 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44488 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44489 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44490 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44491 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44492 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44493 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44494 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44495 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44496 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44497 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44498 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44499 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44500 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44501 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44502 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44503 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44504 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44505 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44506 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44507 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44508 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44509 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44510 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44511 => [
				'validator'                => new IsInstanceOfValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44512 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44513 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44514 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44515 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44516 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44517 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44518 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44519 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44520 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44521 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44522 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44523 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44524 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44525 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44526 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44527 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44528 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44529 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44530 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44531 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44532 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44533 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44534 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44535 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44536 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44537 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44538 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44539 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44540 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44541 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44542 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44543 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44544 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44545 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44546 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44547 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44548 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44549 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44550 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44551 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44552 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44553 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44554 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44555 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			44556 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44557 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44558 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44559 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44560 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44561 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44562 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44563 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44564 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44565 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44566 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44567 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44568 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44569 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44570 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44571 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44572 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44573 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44574 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44575 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44576 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44577 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44578 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44579 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44580 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44581 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44582 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44583 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44584 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44585 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44586 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44587 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44588 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44589 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44590 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44591 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44592 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44593 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44594 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44595 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44596 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44597 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44598 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44599 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44600 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44601 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44602 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44603 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44604 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44605 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44606 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44607 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44608 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44609 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44610 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44611 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44612 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44613 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44614 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44615 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44616 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44617 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44618 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44619 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44620 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44621 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44622 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44623 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44624 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44625 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44626 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44627 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44628 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44629 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44630 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44631 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44632 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44633 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44634 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44635 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44636 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44637 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44638 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44639 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44640 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44641 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44642 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44643 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44644 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44645 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44646 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44647 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44648 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44649 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44650 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44651 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44652 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44653 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44654 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44655 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44656 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44657 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44658 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44659 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44660 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44661 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44662 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44663 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44664 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44665 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44666 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44667 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44668 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44669 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44670 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44671 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44672 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44673 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44674 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44675 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44676 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44677 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44678 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44679 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44680 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44681 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44682 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44683 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44684 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44685 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44686 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44687 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44688 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44689 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44690 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44691 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44692 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44693 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44694 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44695 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44696 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44697 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44698 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44699 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44700 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44701 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44702 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44703 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44704 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44705 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44706 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44707 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44708 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44709 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44710 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44711 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44712 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44713 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44714 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44715 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44716 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44717 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44718 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44719 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44720 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44721 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44722 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44723 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44724 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44725 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44726 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44727 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44728 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44729 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44730 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44731 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44732 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44733 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44734 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44735 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44736 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44737 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44738 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44739 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44740 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44741 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44742 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44743 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44744 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44745 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44746 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44747 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44748 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44749 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44750 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44751 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44752 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44753 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44754 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44755 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44756 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44757 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44758 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44759 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44760 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44761 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44762 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44763 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44764 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			44765 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44766 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44767 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44768 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44769 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44770 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44771 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44772 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44773 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44774 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44775 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44776 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44777 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44778 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44779 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44780 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44781 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44782 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44783 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44784 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44785 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44786 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44787 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44788 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44789 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44790 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44791 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44792 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44793 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44794 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44795 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44796 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44797 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44798 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44799 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44800 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44801 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44802 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44803 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44804 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44805 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44806 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44807 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44808 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44809 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44810 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44811 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44812 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44813 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44814 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44815 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44816 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44817 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44818 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44819 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44820 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44821 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44822 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44823 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44824 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44825 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44826 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44827 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44828 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44829 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44830 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44831 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44832 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44833 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44834 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44835 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44836 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44837 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44838 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44839 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44840 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44841 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44842 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44843 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44844 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44845 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44846 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44847 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44848 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44849 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44850 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44851 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44852 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44853 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44854 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44855 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44856 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44857 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44858 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44859 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44860 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44861 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44862 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44863 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44864 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44865 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44866 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44867 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44868 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44869 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44870 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44871 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44872 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44873 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44874 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44875 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44876 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44877 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44878 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44879 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44880 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44881 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44882 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44883 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44884 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44885 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44886 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44887 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44888 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44889 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44890 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44891 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44892 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44893 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44894 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44895 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44896 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44897 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44898 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44899 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44900 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44901 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44902 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44903 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44904 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44905 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44906 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44907 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44908 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44909 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44910 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44911 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44912 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44913 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44914 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44915 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44916 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44917 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44918 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44919 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44920 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44921 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44922 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44923 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44924 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44925 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44926 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44927 => [
				'validator'                => new IsInStringBackedEnumValuesArrayValidator( Values::STRING_BACKED_ENUM_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44928 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44929 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44930 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44931 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44932 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44933 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44934 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44935 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44936 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44937 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44938 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44939 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44940 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44941 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44942 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44943 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44944 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44945 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44946 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44947 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44948 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44949 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44950 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44951 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44952 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44953 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44954 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44955 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44956 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44957 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44958 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44959 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44960 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44961 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44962 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44963 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44964 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44965 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44966 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44967 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44968 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44969 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			44970 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44971 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44972 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44973 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44974 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44975 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44976 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44977 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44978 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44979 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44980 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44981 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44982 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44983 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44984 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44985 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44986 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44987 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44988 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44989 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44990 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44991 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44992 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44993 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44994 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44995 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44996 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44997 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44998 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			44999 => [
				'validator'                => new IsInStringBackedEnumValuesValidator( Values::STRING_BACKED_ENUM_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
