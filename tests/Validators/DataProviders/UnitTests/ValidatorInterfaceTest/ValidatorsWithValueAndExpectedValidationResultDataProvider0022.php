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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0022 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			22000 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22001 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22002 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22003 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22004 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22005 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22006 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22007 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22008 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22009 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22010 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22011 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22012 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22013 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22014 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22015 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22016 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22017 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22018 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22019 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22020 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22021 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22022 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22023 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22024 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22025 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22026 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22027 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22028 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22029 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22030 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22031 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22032 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22033 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22034 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22035 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22036 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22037 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22038 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22039 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22040 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22041 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22042 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22043 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22044 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22045 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22046 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22047 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22048 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22049 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22050 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22051 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22052 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22053 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22054 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22055 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22056 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22057 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22058 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22059 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22060 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22061 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22062 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22063 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22064 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22065 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22066 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22067 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22068 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22069 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22070 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22071 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22072 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22073 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22074 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22075 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22076 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22077 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22078 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22079 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22080 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22081 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22082 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22083 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22084 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22085 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22086 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22087 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22088 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22089 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22090 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22091 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22092 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22093 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22094 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22095 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22096 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22097 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22098 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22099 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22100 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22101 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22102 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22103 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22104 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22105 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22106 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22107 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22108 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22109 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22110 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22111 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22112 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22113 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22114 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22115 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22116 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22117 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22118 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22119 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22120 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22121 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22122 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22123 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22124 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22125 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22126 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22127 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22128 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22129 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22130 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22131 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22132 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22133 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22134 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22135 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22136 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22137 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22138 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22139 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22140 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22141 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22142 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22143 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22144 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22145 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22146 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22147 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22148 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22149 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22150 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22151 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			22152 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			22153 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22154 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22155 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22156 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22157 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22158 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22159 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22160 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22161 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22162 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22163 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22164 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22165 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22166 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22167 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22168 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22169 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22170 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22171 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22172 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22173 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22174 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22175 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22176 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22177 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22178 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22179 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22180 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22181 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22182 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22183 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22184 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22185 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22186 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22187 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22188 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22189 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22190 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22191 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22192 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22193 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22194 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22195 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22196 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22197 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22198 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22199 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22200 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22201 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22202 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22203 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22204 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22205 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22206 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22207 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22208 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22209 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22210 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22211 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22212 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22213 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22214 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22215 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22216 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22217 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22218 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22219 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22220 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22221 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22222 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22223 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22224 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22225 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22226 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22227 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22228 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22229 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22230 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22231 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22232 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22233 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22234 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22235 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22236 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22237 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22238 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22239 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22240 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22241 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22242 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22243 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22244 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22245 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22246 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22247 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22248 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22249 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22250 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22251 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22252 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22253 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22254 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22255 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22256 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22257 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22258 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22259 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22260 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22261 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22262 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22263 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22264 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22265 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22266 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22267 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22268 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22269 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22270 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22271 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22272 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22273 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22274 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22275 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22276 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22277 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22278 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22279 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22280 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22281 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22282 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22283 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22284 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22285 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22286 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22287 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22288 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22289 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22290 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22291 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22292 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22293 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22294 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22295 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22296 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22297 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22298 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22299 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22300 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22301 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22302 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22303 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22304 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22305 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22306 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22307 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22308 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22309 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22310 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22311 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22312 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22313 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22314 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22315 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22316 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22317 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22318 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22319 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22320 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22321 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22322 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22323 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22324 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22325 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22326 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22327 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22328 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22329 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22330 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22331 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22332 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22333 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22334 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22335 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22336 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22337 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22338 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22339 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22340 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22341 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22342 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22343 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22344 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22345 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22346 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22347 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22348 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22349 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22350 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22351 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22352 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22353 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22354 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22355 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22356 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22357 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22358 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22359 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22360 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22361 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22362 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22363 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22364 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22365 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			22366 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22367 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22368 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22369 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22370 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22371 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22372 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22373 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22374 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22375 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22376 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22377 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22378 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22379 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22380 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22381 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22382 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22383 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22384 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22385 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22386 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22387 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22388 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22389 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22390 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22391 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22392 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22393 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22394 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22395 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22396 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22397 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22398 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22399 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22400 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22401 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22402 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22403 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22404 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22405 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22406 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22407 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22408 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22409 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22410 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22411 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22412 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22413 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22414 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22415 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22416 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22417 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22418 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22419 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22420 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22421 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22422 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22423 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22424 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22425 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22426 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22427 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22428 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22429 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22430 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22431 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22432 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22433 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22434 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22435 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22436 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22437 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22438 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22439 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22440 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22441 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22442 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22443 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22444 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22445 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22446 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22447 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22448 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22449 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22450 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22451 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22452 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22453 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22454 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22455 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22456 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22457 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22458 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22459 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22460 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22461 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22462 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22463 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22464 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22465 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22466 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22467 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22468 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22469 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22470 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22471 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22472 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22473 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22474 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22475 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22476 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22477 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22478 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22479 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22480 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22481 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22482 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22483 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22484 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22485 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22486 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22487 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22488 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22489 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22490 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22491 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22492 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22493 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22494 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22495 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22496 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22497 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22498 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22499 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22500 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22501 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22502 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22503 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22504 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22505 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22506 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22507 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22508 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22509 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22510 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22511 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22512 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22513 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22514 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22515 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22516 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22517 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22518 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22519 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22520 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22521 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22522 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22523 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22524 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22525 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22526 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22527 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22528 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22529 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22530 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22531 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22532 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22533 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22534 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22535 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22536 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22537 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22538 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22539 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22540 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22541 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22542 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22543 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22544 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22545 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22546 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22547 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22548 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22549 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22550 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22551 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22552 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22553 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22554 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22555 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22556 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22557 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22558 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22559 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22560 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22561 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22562 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22563 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22564 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22565 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22566 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22567 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22568 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22569 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22570 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22571 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22572 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22573 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22574 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			22575 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22576 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22577 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22578 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22579 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22580 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22581 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22582 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22583 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22584 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22585 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22586 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22587 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22588 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22589 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22590 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22591 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22592 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22593 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22594 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22595 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22596 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22597 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22598 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22599 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22600 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22601 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22602 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22603 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22604 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22605 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22606 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22607 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22608 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22609 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22610 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22611 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22612 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22613 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22614 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22615 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22616 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22617 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22618 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22619 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22620 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22621 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22622 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22623 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22624 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22625 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22626 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22627 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22628 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22629 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22630 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22631 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22632 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22633 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22634 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22635 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22636 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22637 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22638 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22639 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22640 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22641 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22642 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22643 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22644 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22645 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22646 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22647 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22648 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22649 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22650 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22651 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22652 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22653 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22654 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22655 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22656 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22657 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22658 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22659 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22660 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22661 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22662 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22663 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22664 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22665 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22666 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22667 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22668 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22669 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22670 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22671 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22672 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22673 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22674 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22675 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22676 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22677 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22678 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22679 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22680 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22681 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22682 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22683 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22684 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22685 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22686 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22687 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22688 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22689 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22690 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22691 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22692 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22693 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22694 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22695 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22696 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22697 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22698 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22699 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22700 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22701 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22702 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22703 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22704 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22705 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22706 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22707 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22708 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22709 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22710 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22711 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22712 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22713 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22714 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22715 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22716 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22717 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22718 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22719 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22720 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22721 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22722 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22723 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22724 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22725 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22726 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22727 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22728 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22729 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22730 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22731 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22732 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22733 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22734 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22735 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22736 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22737 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22738 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22739 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22740 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22741 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22742 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22743 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22744 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22745 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22746 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22747 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22748 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22749 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22750 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22751 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22752 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22753 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22754 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22755 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22756 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22757 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22758 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22759 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22760 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22761 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22762 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22763 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22764 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22765 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22766 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22767 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22768 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22769 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22770 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22771 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22772 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22773 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22774 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22775 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22776 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22777 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22778 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22779 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22780 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22781 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			22782 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			22783 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22784 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22785 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22786 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22787 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22788 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22789 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22790 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22791 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22792 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22793 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22794 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22795 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22796 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22797 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22798 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22799 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22800 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22801 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22802 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22803 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22804 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22805 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22806 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22807 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22808 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22809 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22810 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22811 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22812 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22813 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22814 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22815 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22816 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22817 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22818 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22819 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22820 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22821 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22822 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22823 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22824 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22825 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22826 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22827 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22828 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22829 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22830 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22831 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22832 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22833 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22834 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22835 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22836 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22837 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22838 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22839 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22840 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22841 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22842 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22843 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22844 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22845 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22846 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22847 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22848 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22849 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22850 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22851 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22852 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22853 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22854 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22855 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22856 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22857 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22858 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22859 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22860 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22861 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22862 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22863 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22864 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22865 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22866 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22867 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22868 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22869 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22870 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22871 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22872 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22873 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22874 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22875 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22876 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22877 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22878 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22879 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22880 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22881 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22882 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22883 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22884 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22885 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22886 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22887 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22888 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22889 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22890 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22891 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22892 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22893 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22894 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22895 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22896 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22897 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22898 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22899 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22900 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22901 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22902 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22903 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22904 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22905 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22906 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22907 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22908 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22909 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22910 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22911 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22912 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22913 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22914 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22915 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22916 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22917 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22918 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22919 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22920 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22921 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22922 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22923 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22924 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22925 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22926 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22927 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22928 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22929 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22930 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22931 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22932 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22933 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22934 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22935 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22936 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22937 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22938 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22939 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22940 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22941 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22942 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22943 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22944 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22945 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22946 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22947 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22948 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22949 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22950 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22951 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22952 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22953 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22954 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22955 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22956 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22957 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22958 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22959 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22960 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22961 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22962 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22963 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22964 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22965 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22966 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22967 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22968 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22969 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22970 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22971 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22972 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22973 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22974 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22975 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22976 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22977 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22978 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22979 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22980 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22981 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22982 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22983 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22984 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22985 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22986 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22987 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22988 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22989 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			22990 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			22991 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22992 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22993 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22994 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22995 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22996 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22997 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22998 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			22999 => [
				'validator'                => new IsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
