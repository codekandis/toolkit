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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0027 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			27000 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27001 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27002 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27003 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27004 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27005 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27006 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27007 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27008 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27009 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27010 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27011 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27012 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27013 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27014 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27015 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27016 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27017 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27018 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27019 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27020 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27021 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27022 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27023 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27024 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27025 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27026 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27027 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27028 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27029 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27030 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27031 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27032 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27033 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27034 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27035 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27036 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27037 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27038 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27039 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27040 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27041 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27042 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27043 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27044 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27045 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27046 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27047 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27048 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27049 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27050 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27051 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27052 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27053 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27054 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27055 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27056 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27057 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27058 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27059 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27060 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27061 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27062 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27063 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27064 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27065 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27066 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27067 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27068 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27069 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27070 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27071 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27072 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27073 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27074 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27075 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27076 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27077 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27078 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27079 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27080 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27081 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27082 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27083 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27084 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27085 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27086 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27087 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27088 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27089 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27090 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27091 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27092 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27093 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27094 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27095 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27096 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27097 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27098 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27099 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27100 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27101 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27102 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27103 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27104 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27105 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27106 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27107 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27108 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27109 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27110 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27111 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27112 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27113 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27114 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27115 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27116 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27117 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27118 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27119 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27120 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27121 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27122 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27123 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27124 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27125 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27126 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27127 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27128 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27129 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27130 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27131 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27132 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27133 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27134 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27135 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27136 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27137 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27138 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27139 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27140 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27141 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27142 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27143 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27144 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27145 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27146 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27147 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27148 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27149 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27150 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27151 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27152 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27153 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27154 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27155 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27156 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27157 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27158 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27159 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27160 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27161 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27162 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27163 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27164 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27165 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27166 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27167 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27168 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27169 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27170 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27171 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27172 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27173 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27174 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27175 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27176 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27177 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27178 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27179 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27180 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27181 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27182 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27183 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27184 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27185 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27186 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27187 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27188 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27189 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27190 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27191 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27192 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27193 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27194 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27195 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27196 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27197 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27198 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27199 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27200 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27201 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27202 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27203 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27204 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27205 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27206 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27207 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27208 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27209 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27210 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27211 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27212 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27213 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27214 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27215 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27216 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27217 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27218 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27219 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27220 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27221 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27222 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27223 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27224 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27225 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27226 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27227 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27228 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27229 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27230 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27231 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27232 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27233 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27234 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27235 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27236 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27237 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27238 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27239 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27240 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27241 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27242 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27243 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27244 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27245 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27246 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27247 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27248 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27249 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27250 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27251 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27252 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27253 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27254 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27255 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27256 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27257 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27258 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27259 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27260 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27261 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27262 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27263 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27264 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27265 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27266 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27267 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27268 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27269 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27270 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27271 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27272 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27273 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27274 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27275 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27276 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27277 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27278 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27279 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27280 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27281 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27282 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27283 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27284 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27285 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27286 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27287 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27288 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27289 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27290 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27291 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27292 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27293 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27294 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27295 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27296 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27297 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27298 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27299 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27300 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27301 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27302 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27303 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27304 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27305 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27306 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27307 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27308 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27309 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27310 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27311 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27312 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27313 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27314 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27315 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27316 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27317 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27318 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27319 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27320 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27321 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27322 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27323 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27324 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27325 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27326 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27327 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27328 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27329 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27330 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27331 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27332 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27333 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27334 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27335 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27336 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27337 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27338 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27339 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27340 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27341 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27342 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27343 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27344 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27345 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27346 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27347 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27348 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27349 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27350 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27351 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27352 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27353 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27354 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27355 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27356 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27357 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27358 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27359 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27360 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27361 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27362 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27363 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27364 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27365 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27366 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27367 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27368 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27369 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27370 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27371 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27372 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27373 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27374 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27375 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27376 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27377 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27378 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27379 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27380 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27381 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27382 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27383 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27384 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27385 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27386 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27387 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27388 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27389 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27390 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27391 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27392 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27393 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27394 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27395 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27396 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27397 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27398 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27399 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27400 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27401 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27402 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27403 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27404 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27405 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27406 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27407 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27408 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27409 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27410 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27411 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27412 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27413 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27414 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27415 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27416 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27417 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27418 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27419 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27420 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27421 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27422 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27423 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27424 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27425 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27426 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27427 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27428 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27429 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27430 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27431 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27432 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27433 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27434 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27435 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27436 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27437 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27438 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27439 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27440 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27441 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27442 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27443 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27444 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27445 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27446 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27447 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27448 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27449 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27450 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27451 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27452 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27453 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27454 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27455 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27456 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27457 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27458 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27459 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27460 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27461 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27462 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27463 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27464 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27465 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27466 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27467 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27468 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27469 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27470 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27471 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27472 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27473 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27474 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27475 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27476 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27477 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27478 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27479 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27480 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27481 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27482 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27483 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27484 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27485 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27486 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27487 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27488 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27489 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27490 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27491 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27492 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27493 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27494 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27495 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27496 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27497 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27498 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27499 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27500 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27501 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27502 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27503 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27504 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27505 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27506 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27507 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27508 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27509 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27510 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27511 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27512 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27513 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27514 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27515 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27516 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27517 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27518 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27519 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27520 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27521 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27522 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27523 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27524 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27525 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27526 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27527 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27528 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27529 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27530 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27531 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27532 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27533 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27534 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27535 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27536 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27537 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27538 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27539 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27540 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27541 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27542 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27543 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27544 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27545 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27546 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27547 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27548 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27549 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27550 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27551 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27552 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27553 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27554 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27555 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27556 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27557 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27558 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27559 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27560 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27561 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27562 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27563 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27564 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27565 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27566 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27567 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27568 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27569 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27570 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27571 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27572 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27573 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27574 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27575 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27576 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27577 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27578 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27579 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27580 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27581 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27582 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27583 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27584 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27585 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27586 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27587 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27588 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27589 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27590 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27591 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27592 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27593 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27594 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27595 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27596 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27597 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27598 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27599 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27600 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27601 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27602 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27603 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27604 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27605 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27606 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27607 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27608 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27609 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27610 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27611 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27612 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27613 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27614 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27615 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27616 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27617 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27618 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27619 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27620 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27621 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27622 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27623 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27624 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27625 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27626 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27627 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27628 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27629 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27630 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27631 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27632 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27633 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27634 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27635 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27636 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27637 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27638 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27639 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27640 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27641 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27642 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27643 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27644 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27645 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27646 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27647 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27648 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27649 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27650 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27651 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27652 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27653 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27654 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27655 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27656 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27657 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27658 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27659 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27660 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27661 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27662 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27663 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27664 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27665 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27666 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27667 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27668 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27669 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27670 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27671 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27672 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27673 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27674 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27675 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27676 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27677 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27678 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27679 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27680 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27681 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27682 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27683 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27684 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27685 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27686 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27687 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27688 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27689 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27690 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27691 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27692 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27693 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27694 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27695 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27696 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27697 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27698 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27699 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27700 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27701 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27702 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27703 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27704 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27705 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27706 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27707 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27708 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27709 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27710 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27711 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27712 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27713 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27714 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27715 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27716 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27717 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27718 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27719 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27720 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27721 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27722 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27723 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27724 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27725 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27726 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27727 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27728 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27729 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27730 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27731 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27732 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27733 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27734 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27735 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27736 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27737 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27738 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27739 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27740 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27741 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27742 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27743 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27744 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27745 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27746 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27747 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27748 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27749 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27750 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27751 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27752 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27753 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27754 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27755 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27756 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27757 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27758 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27759 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27760 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27761 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27762 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27763 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27764 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27765 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27766 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27767 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27768 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27769 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27770 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27771 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27772 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27773 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27774 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27775 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27776 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27777 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27778 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27779 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27780 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27781 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27782 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27783 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27784 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27785 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27786 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27787 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27788 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27789 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27790 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27791 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27792 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27793 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27794 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27795 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27796 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27797 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27798 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27799 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27800 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27801 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27802 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27803 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27804 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27805 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27806 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27807 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27808 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27809 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27810 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27811 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27812 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27813 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27814 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27815 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27816 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27817 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27818 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27819 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27820 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27821 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27822 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27823 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27824 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27825 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27826 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27827 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27828 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27829 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27830 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27831 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27832 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27833 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27834 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27835 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27836 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27837 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27838 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27839 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27840 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27841 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27842 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27843 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27844 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27845 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27846 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27847 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27848 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27849 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27850 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27851 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27852 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27853 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27854 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27855 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27856 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27857 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27858 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27859 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27860 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27861 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27862 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27863 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27864 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27865 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27866 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27867 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27868 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27869 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27870 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27871 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27872 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27873 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27874 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27875 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27876 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27877 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27878 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27879 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27880 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27881 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27882 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27883 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27884 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27885 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27886 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27887 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27888 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27889 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27890 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27891 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27892 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27893 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27894 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27895 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27896 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27897 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27898 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27899 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27900 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27901 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27902 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27903 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27904 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27905 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27906 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27907 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27908 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27909 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27910 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27911 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27912 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27913 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27914 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27915 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27916 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27917 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27918 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27919 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27920 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27921 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27922 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27923 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27924 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27925 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27926 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27927 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27928 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27929 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27930 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27931 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27932 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27933 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27934 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27935 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27936 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27937 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27938 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27939 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27940 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27941 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27942 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27943 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27944 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27945 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27946 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27947 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27948 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27949 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27950 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27951 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27952 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27953 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27954 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27955 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27956 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27957 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27958 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27959 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27960 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27961 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27962 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27963 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27964 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27965 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27966 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27967 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27968 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27969 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27970 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27971 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27972 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27973 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27974 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27975 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27976 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27977 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27978 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27979 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27980 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27981 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27982 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27983 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27984 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27985 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27986 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27987 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27988 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27989 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27990 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27991 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27992 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27993 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27994 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27995 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27996 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			27997 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27998 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			27999 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
