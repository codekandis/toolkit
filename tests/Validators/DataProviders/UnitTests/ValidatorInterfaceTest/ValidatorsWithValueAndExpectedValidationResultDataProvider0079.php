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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0079 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			79000 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79001 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79002 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79003 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79004 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79005 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79006 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79007 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79008 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79009 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79010 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79011 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79012 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79013 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79014 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79015 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79016 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79017 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79018 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79019 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79020 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79021 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79022 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79023 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79024 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79025 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79026 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79027 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79028 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79029 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79030 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79031 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79032 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79033 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79034 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79035 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79036 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79037 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79038 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79039 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79040 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79041 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79042 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79043 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79044 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79045 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79046 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79047 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79048 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79049 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79050 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79051 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79052 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79053 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79054 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79055 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79056 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79057 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79058 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79059 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79060 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79061 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79062 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79063 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79064 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79065 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79066 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79067 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79068 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79069 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79070 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79071 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79072 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79073 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79074 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79075 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79076 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79077 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79078 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79079 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79080 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79081 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79082 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79083 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79084 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79085 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79086 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79087 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79088 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79089 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79090 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79091 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79092 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79093 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79094 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79095 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79096 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79097 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79098 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79099 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79100 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79101 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79102 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79103 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79104 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79105 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79106 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79107 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79108 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79109 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79110 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79111 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79112 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79113 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79114 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79115 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79116 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79117 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79118 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79119 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79120 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79121 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79122 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79123 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79124 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79125 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79126 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79127 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79128 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79129 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79130 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79131 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79132 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79133 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79134 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79135 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79136 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79137 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79138 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79139 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79140 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79141 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79142 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79143 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79144 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79145 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79146 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79147 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79148 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79149 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79150 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79151 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79152 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79153 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79154 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79155 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79156 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79157 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79158 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79159 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79160 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79161 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79162 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79163 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79164 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79165 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79166 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79167 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79168 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79169 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79170 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79171 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79172 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79173 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79174 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79175 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79176 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79177 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79178 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79179 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79180 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79181 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79182 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79183 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79184 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79185 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79186 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79187 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79188 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79189 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79190 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79191 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79192 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79193 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79194 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79195 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79196 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79197 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79198 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79199 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79200 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79201 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79202 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79203 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79204 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79205 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79206 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79207 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79208 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79209 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79210 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79211 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79212 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79213 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79214 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79215 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79216 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79217 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79218 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79219 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79220 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79221 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79222 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79223 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79224 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79225 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79226 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79227 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79228 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79229 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79230 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79231 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79232 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79233 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79234 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79235 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79236 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79237 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79238 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79239 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79240 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79241 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79242 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79243 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79244 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79245 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79246 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79247 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79248 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79249 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79250 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79251 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79252 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79253 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79254 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79255 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79256 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79257 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79258 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79259 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79260 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79261 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79262 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79263 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79264 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79265 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79266 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79267 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79268 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79269 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79270 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79271 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79272 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79273 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79274 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79275 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79276 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79277 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79278 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79279 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79280 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79281 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79282 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79283 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79284 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79285 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79286 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79287 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79288 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79289 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79290 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79291 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79292 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79293 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79294 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79295 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79296 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79297 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79298 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79299 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79300 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79301 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79302 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79303 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79304 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79305 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79306 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79307 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79308 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79309 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79310 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79311 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79312 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79313 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79314 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79315 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79316 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79317 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79318 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79319 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79320 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79321 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79322 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79323 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79324 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79325 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79326 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79327 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79328 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79329 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79330 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79331 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79332 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79333 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79334 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79335 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79336 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79337 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79338 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79339 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79340 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79341 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79342 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79343 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79344 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79345 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79346 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79347 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79348 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79349 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79350 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79351 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79352 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79353 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79354 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79355 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79356 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79357 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79358 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79359 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79360 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79361 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79362 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79363 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79364 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79365 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79366 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79367 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79368 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79369 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79370 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79371 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79372 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79373 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79374 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79375 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79376 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79377 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79378 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79379 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79380 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79381 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79382 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79383 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79384 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79385 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79386 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79387 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79388 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79389 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79390 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79391 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79392 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79393 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79394 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79395 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79396 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79397 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79398 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79399 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79400 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79401 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79402 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79403 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79404 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79405 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79406 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79407 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79408 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79409 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79410 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79411 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79412 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79413 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79414 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79415 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79416 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79417 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79418 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79419 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79420 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79421 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79422 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79423 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79424 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79425 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79426 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79427 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79428 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79429 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79430 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79431 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79432 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79433 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79434 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79435 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79436 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79437 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79438 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79439 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79440 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79441 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79442 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79443 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79444 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79445 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79446 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79447 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79448 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79449 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79450 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79451 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79452 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79453 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79454 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79455 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79456 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79457 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79458 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79459 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79460 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79461 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79462 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79463 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79464 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79465 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79466 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79467 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79468 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79469 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79470 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79471 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79472 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79473 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79474 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79475 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79476 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79477 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79478 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79479 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79480 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79481 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79482 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79483 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79484 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79485 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79486 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79487 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79488 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79489 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79490 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79491 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79492 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79493 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79494 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79495 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79496 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79497 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79498 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79499 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79500 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79501 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79502 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79503 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79504 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79505 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79506 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79507 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79508 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79509 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79510 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79511 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79512 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79513 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79514 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79515 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79516 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79517 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79518 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79519 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79520 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79521 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79522 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79523 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79524 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79525 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79526 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79527 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79528 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79529 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79530 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79531 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79532 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79533 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79534 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79535 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79536 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79537 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79538 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79539 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79540 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79541 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79542 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79543 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79544 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79545 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79546 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79547 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79548 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79549 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79550 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79551 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79552 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79553 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79554 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79555 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79556 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79557 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79558 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79559 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79560 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79561 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79562 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79563 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79564 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79565 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79566 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79567 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79568 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79569 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79570 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79571 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79572 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79573 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79574 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79575 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79576 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79577 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79578 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79579 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79580 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79581 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79582 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79583 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79584 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79585 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79586 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79587 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79588 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79589 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79590 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79591 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79592 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79593 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79594 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79595 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79596 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79597 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79598 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79599 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79600 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79601 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79602 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79603 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79604 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79605 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79606 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79607 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79608 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79609 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79610 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79611 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79612 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79613 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79614 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79615 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79616 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79617 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79618 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79619 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79620 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79621 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79622 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79623 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79624 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79625 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79626 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79627 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79628 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79629 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79630 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79631 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79632 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79633 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79634 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79635 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79636 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79637 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79638 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79639 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79640 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79641 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79642 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79643 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79644 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79645 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79646 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79647 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79648 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79649 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79650 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79651 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79652 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79653 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79654 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79655 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79656 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79657 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79658 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79659 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79660 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79661 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79662 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79663 => [
				'validator'                => new NullableIsInArrayValidator( Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79664 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79665 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79666 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79667 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79668 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79669 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79670 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79671 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79672 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79673 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79674 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79675 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79676 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79677 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79678 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79679 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79680 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79681 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79682 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79683 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79684 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79685 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79686 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79687 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79688 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79689 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79690 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79691 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79692 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79693 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79694 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79695 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79696 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79697 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79698 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79699 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79700 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79701 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79702 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79703 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79704 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79705 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79706 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79707 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79708 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79709 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79710 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79711 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79712 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79713 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79714 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79715 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79716 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79717 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79718 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79719 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79720 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79721 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79722 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79723 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79724 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79725 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79726 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79727 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79728 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79729 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79730 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79731 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79732 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79733 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79734 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79735 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79736 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79737 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79738 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79739 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79740 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79741 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79742 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79743 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79744 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79745 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79746 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79747 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79748 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79749 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79750 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79751 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79752 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79753 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79754 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79755 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79756 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79757 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79758 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79759 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79760 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79761 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79762 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79763 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79764 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79765 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79766 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79767 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79768 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79769 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79770 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79771 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79772 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79773 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79774 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79775 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79776 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79777 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79778 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79779 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79780 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79781 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79782 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79783 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79784 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79785 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79786 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79787 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79788 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79789 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79790 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79791 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79792 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79793 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79794 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79795 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79796 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79797 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79798 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79799 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79800 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79801 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79802 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79803 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79804 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79805 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79806 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79807 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79808 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79809 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79810 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79811 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79812 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79813 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79814 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79815 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79816 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79817 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79818 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79819 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79820 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79821 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79822 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79823 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79824 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79825 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79826 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79827 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79828 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79829 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79830 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79831 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79832 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79833 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79834 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79835 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79836 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79837 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79838 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79839 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79840 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79841 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79842 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79843 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79844 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79845 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79846 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79847 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79848 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79849 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79850 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79851 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79852 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79853 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79854 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79855 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79856 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79857 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79858 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79859 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79860 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79861 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79862 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79863 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79864 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79865 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79866 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79867 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79868 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79869 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79870 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79871 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79872 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79873 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79874 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79875 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79876 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79877 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79878 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79879 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79880 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79881 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79882 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79883 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79884 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79885 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79886 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79887 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79888 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79889 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79890 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79891 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79892 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79893 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79894 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79895 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79896 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79897 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79898 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79899 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79900 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79901 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79902 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79903 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79904 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79905 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79906 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79907 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79908 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79909 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79910 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79911 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79912 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79913 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79914 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79915 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79916 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79917 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79918 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79919 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79920 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79921 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79922 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79923 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79924 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79925 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79926 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79927 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79928 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79929 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79930 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79931 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79932 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79933 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79934 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79935 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79936 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79937 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79938 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79939 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79940 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79941 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79942 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79943 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79944 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79945 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79946 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79947 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79948 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79949 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79950 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79951 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79952 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79953 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79954 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79955 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79956 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79957 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79958 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79959 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79960 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79961 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79962 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79963 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79964 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79965 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79966 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79967 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79968 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79969 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79970 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79971 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79972 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79973 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79974 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79975 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79976 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79977 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79978 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79979 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79980 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79981 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79982 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79983 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79984 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79985 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79986 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79987 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79988 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79989 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79990 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			79991 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79992 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79993 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79994 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79995 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79996 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79997 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79998 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			79999 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
