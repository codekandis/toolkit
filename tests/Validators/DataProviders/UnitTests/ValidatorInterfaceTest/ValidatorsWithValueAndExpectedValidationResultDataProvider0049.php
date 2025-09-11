<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsNonEmptyStringArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0049 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			49000 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49001 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49002 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49003 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49004 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49005 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49006 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49007 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49008 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49009 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49010 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49011 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49012 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49013 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49014 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49015 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49016 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49017 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49018 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49019 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49020 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49021 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49022 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49023 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49024 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49025 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49026 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49027 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49028 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49029 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49030 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49031 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49032 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49033 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49034 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49035 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49036 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49037 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49038 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49039 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49040 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49041 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49042 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49043 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49044 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49045 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49046 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49047 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49048 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49049 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49050 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49051 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49052 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49053 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49054 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49055 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49056 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49057 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49058 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49059 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49060 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49061 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49062 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49063 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49064 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49065 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49066 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49067 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49068 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49069 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49070 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49071 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49072 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49073 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49074 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49075 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49076 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49077 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49078 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49079 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49080 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49081 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49082 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49083 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49084 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49085 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49086 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49087 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49088 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49089 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49090 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49091 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49092 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49093 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49094 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49095 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49096 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49097 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49098 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49099 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49100 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49101 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49102 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49103 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49104 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49105 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49106 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49107 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49108 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49109 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49110 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49111 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49112 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49113 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49114 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49115 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49116 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49117 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49118 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49119 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49120 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49121 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49122 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49123 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49124 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49125 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49126 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49127 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49128 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49129 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49130 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49131 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49132 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49133 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49134 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49135 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49136 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49137 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49138 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49139 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49140 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49141 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49142 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49143 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49144 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49145 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49146 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49147 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49148 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49149 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49150 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49151 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49152 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49153 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49154 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49155 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49156 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49157 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49158 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49159 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49160 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49161 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49162 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49163 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49164 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49165 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49166 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49167 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49168 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49169 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49170 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49171 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49172 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49173 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49174 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49175 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49176 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49177 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49178 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49179 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49180 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49181 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49182 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49183 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49184 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49185 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49186 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49187 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49188 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49189 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49190 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49191 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49192 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49193 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49194 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49195 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49196 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49197 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49198 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49199 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49200 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49201 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49202 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49203 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49204 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49205 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49206 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49207 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49208 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49209 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49210 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49211 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49212 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49213 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49214 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49215 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49216 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49217 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49218 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49219 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49220 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49221 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49222 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49223 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49224 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49225 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49226 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49227 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49228 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49229 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49230 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49231 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49232 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49233 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49234 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49235 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49236 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49237 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49238 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49239 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49240 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49241 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49242 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49243 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49244 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49245 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49246 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49247 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49248 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49249 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49250 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49251 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49252 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49253 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49254 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49255 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49256 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49257 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49258 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49259 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49260 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49261 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49262 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49263 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49264 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49265 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49266 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49267 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49268 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49269 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49270 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49271 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49272 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49273 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49274 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49275 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49276 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49277 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49278 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49279 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49280 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49281 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49282 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49283 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49284 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49285 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49286 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49287 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49288 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49289 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49290 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49291 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49292 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49293 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49294 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49295 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49296 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49297 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49298 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49299 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49300 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49301 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49302 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49303 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49304 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49305 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49306 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49307 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49308 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49309 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49310 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49311 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49312 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49313 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49314 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49315 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49316 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49317 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49318 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49319 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49320 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49321 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49322 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49323 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49324 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49325 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49326 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49327 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49328 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49329 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49330 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49331 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49332 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49333 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49334 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49335 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49336 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49337 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49338 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49339 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49340 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49341 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49342 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49343 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49344 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49345 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49346 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49347 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49348 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49349 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49350 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49351 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49352 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49353 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49354 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49355 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49356 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49357 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49358 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49359 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49360 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49361 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49362 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49363 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49364 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49365 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49366 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49367 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49368 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49369 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49370 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49371 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49372 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49373 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49374 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49375 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49376 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49377 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49378 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49379 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49380 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49381 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49382 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49383 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49384 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49385 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49386 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49387 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49388 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49389 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49390 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49391 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49392 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49393 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49394 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49395 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49396 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49397 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49398 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49399 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49400 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49401 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49402 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49403 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49404 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49405 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49406 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49407 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49408 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49409 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49410 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49411 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49412 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49413 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49414 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49415 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49416 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49417 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49418 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49419 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49420 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49421 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49422 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49423 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49424 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49425 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49426 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49427 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49428 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49429 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49430 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49431 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49432 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49433 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49434 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49435 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49436 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49437 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49438 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49439 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49440 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49441 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49442 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49443 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49444 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49445 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49446 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49447 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49448 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49449 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49450 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49451 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49452 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49453 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49454 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49455 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49456 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49457 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49458 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49459 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49460 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49461 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49462 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49463 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49464 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49465 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49466 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49467 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49468 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49469 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49470 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49471 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49472 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49473 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49474 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49475 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49476 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49477 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49478 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49479 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49480 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49481 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49482 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49483 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49484 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49485 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49486 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49487 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49488 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49489 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49490 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49491 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49492 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49493 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49494 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49495 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49496 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49497 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49498 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49499 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49500 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49501 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49502 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49503 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_BINARY_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49504 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49505 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49506 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49507 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49508 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49509 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49510 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49511 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49512 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49513 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49514 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49515 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49516 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49517 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49518 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49519 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49520 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49521 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49522 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49523 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49524 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49525 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49526 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49527 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49528 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49529 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49530 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49531 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49532 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49533 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49534 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49535 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49536 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49537 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49538 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49539 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49540 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49541 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49542 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49543 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49544 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49545 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49546 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49547 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49548 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49549 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49550 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49551 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49552 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49553 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49554 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49555 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49556 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49557 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49558 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49559 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49560 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49561 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49562 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49563 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49564 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49565 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49566 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49567 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49568 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49569 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49570 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49571 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49572 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49573 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49574 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49575 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49576 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49577 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49578 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49579 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49580 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49581 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49582 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49583 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49584 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49585 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49586 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49587 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49588 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49589 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49590 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49591 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49592 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49593 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49594 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49595 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49596 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49597 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49598 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49599 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49600 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49601 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49602 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49603 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49604 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49605 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49606 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49607 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49608 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49609 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49610 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49611 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49612 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49613 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49614 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49615 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49616 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49617 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49618 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49619 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49620 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49621 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49622 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49623 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49624 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49625 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49626 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49627 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49628 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49629 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49630 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49631 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49632 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49633 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49634 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49635 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49636 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49637 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49638 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49639 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49640 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49641 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49642 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49643 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49644 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49645 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49646 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49647 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49648 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49649 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49650 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49651 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49652 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49653 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49654 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49655 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49656 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49657 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49658 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49659 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49660 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49661 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49662 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49663 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49664 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49665 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49666 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49667 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49668 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49669 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49670 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49671 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49672 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49673 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49674 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49675 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49676 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49677 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49678 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49679 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49680 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49681 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49682 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49683 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49684 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49685 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49686 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49687 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49688 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49689 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49690 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49691 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49692 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49693 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49694 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49695 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49696 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49697 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49698 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49699 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49700 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49701 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49702 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49703 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49704 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49705 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49706 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49707 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49708 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49709 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49710 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49711 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_INTEGER_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49712 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49713 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49714 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49715 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49716 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49717 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49718 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49719 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49720 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49721 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49722 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49723 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49724 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49725 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49726 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49727 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49728 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49729 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49730 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49731 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49732 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49733 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49734 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49735 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49736 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49737 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49738 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49739 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49740 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49741 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49742 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49743 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49744 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49745 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49746 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49747 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49748 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49749 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49750 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49751 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49752 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49753 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49754 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49755 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49756 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49757 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49758 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49759 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49760 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49761 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49762 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49763 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49764 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49765 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49766 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49767 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49768 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49769 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49770 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49771 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49772 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49773 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49774 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49775 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49776 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49777 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49778 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49779 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49780 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49781 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49782 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49783 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49784 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49785 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49786 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49787 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49788 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49789 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49790 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49791 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49792 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49793 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49794 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49795 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49796 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49797 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49798 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49799 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49800 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49801 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49802 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49803 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49804 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49805 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49806 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49807 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49808 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49809 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49810 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49811 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49812 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49813 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49814 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49815 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49816 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49817 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49818 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49819 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49820 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49821 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49822 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49823 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49824 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49825 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49826 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49827 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49828 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49829 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49830 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49831 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49832 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49833 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49834 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49835 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49836 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49837 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49838 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49839 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49840 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49841 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49842 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49843 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49844 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49845 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49846 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49847 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49848 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49849 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49850 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49851 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49852 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49853 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49854 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49855 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49856 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49857 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49858 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49859 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49860 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49861 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49862 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49863 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49864 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49865 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49866 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49867 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49868 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49869 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49870 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49871 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49872 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49873 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49874 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49875 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49876 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49877 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49878 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49879 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49880 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49881 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49882 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49883 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49884 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49885 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49886 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49887 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49888 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49889 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49890 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49891 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49892 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49893 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49894 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49895 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49896 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49897 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49898 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49899 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49900 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49901 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49902 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49903 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49904 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49905 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49906 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49907 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49908 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49909 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49910 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49911 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49912 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49913 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49914 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49915 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49916 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49917 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49918 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49919 => [
				'validator'                => new IsMatchingRegularExpressionValidator( Values::REG_EX_FLOAT_STRING ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49920 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49921 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49922 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49923 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49924 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49925 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49926 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49927 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49928 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49929 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49930 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49931 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49932 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49933 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49934 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49935 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49936 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49937 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49938 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49939 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49940 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49941 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49942 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49943 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49944 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49945 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49946 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49947 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49948 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49949 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49950 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49951 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49952 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49953 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49954 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49955 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49956 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49957 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49958 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49959 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49960 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49961 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49962 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49963 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49964 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49965 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49966 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49967 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49968 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49969 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49970 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49971 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49972 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49973 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49974 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49975 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49976 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49977 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49978 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49979 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49980 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49981 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49982 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49983 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49984 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49985 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49986 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49987 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49988 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49989 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49990 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49991 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49992 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49993 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49994 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			49995 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49996 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49997 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49998 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			49999 => [
				'validator'                => new IsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
