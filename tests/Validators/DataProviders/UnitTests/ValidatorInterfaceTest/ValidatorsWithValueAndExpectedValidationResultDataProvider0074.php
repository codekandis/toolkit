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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0074 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			74000 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74001 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74002 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74003 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74004 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74005 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74006 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74007 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74008 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74009 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74010 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74011 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74012 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74013 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74014 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74015 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74016 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74017 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74018 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74019 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74020 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74021 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74022 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74023 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74024 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74025 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74026 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74027 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74028 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74029 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74030 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74031 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74032 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74033 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74034 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74035 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74036 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74037 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74038 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74039 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74040 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74041 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74042 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74043 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74044 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74045 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74046 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74047 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74048 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74049 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74050 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74051 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74052 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74053 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74054 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74055 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74056 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74057 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74058 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74059 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74060 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74061 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74062 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74063 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74064 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74065 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74066 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74067 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74068 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74069 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74070 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74071 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74072 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74073 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74074 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74075 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74076 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74077 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74078 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74079 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74080 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74081 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74082 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74083 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74084 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74085 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74086 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74087 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74088 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74089 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74090 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74091 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74092 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74093 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74094 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74095 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74096 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74097 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74098 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74099 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74100 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74101 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74102 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74103 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74104 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74105 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74106 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74107 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74108 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74109 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74110 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74111 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74112 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74113 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74114 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74115 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74116 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74117 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74118 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74119 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74120 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74121 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74122 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74123 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74124 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74125 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74126 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74127 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74128 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74129 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74130 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74131 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74132 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74133 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74134 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74135 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74136 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74137 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74138 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74139 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74140 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74141 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74142 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74143 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74144 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74145 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74146 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74147 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74148 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74149 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74150 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74151 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74152 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74153 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74154 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74155 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74156 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74157 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74158 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74159 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74160 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74161 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74162 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74163 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74164 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74165 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74166 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74167 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74168 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74169 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74170 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74171 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74172 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74173 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74174 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74175 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74176 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74177 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74178 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74179 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74180 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74181 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74182 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74183 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74184 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74185 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74186 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74187 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74188 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74189 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74190 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74191 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74192 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74193 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74194 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74195 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74196 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74197 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74198 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74199 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74200 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74201 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74202 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74203 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74204 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74205 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74206 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74207 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74208 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74209 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74210 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74211 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74212 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74213 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74214 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74215 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74216 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74217 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74218 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74219 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74220 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74221 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74222 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74223 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74224 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74225 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74226 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74227 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74228 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74229 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74230 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74231 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74232 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74233 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74234 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74235 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74236 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74237 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74238 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74239 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74240 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74241 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74242 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74243 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74244 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74245 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74246 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74247 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74248 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74249 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74250 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74251 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74252 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74253 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74254 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74255 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74256 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74257 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74258 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74259 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74260 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74261 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74262 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74263 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74264 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74265 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74266 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74267 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74268 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74269 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74270 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74271 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74272 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74273 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74274 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74275 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74276 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74277 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74278 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74279 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74280 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74281 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74282 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74283 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74284 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74285 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74286 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74287 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74288 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74289 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74290 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74291 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74292 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74293 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74294 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74295 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74296 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74297 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74298 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74299 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74300 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74301 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74302 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74303 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74304 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74305 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74306 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74307 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74308 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74309 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74310 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74311 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74312 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74313 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74314 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74315 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74316 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74317 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74318 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74319 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74320 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74321 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74322 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74323 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74324 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74325 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74326 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74327 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74328 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74329 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74330 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74331 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74332 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74333 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74334 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74335 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74336 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74337 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74338 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74339 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74340 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74341 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74342 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74343 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74344 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74345 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74346 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74347 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74348 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74349 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74350 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74351 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74352 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74353 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74354 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74355 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74356 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74357 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74358 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74359 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74360 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74361 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74362 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74363 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74364 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74365 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74366 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74367 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74368 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74369 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74370 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74371 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74372 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74373 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74374 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74375 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74376 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74377 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74378 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74379 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74380 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74381 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74382 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74383 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74384 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74385 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74386 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74387 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74388 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74389 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74390 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74391 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74392 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74393 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74394 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74395 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74396 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74397 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74398 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74399 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74400 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74401 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74402 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74403 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74404 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74405 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74406 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74407 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74408 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74409 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74410 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74411 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74412 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74413 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74414 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74415 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74416 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74417 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74418 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74419 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74420 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74421 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74422 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74423 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74424 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74425 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74426 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74427 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74428 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74429 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74430 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74431 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74432 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74433 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74434 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74435 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74436 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74437 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74438 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74439 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74440 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74441 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74442 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74443 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74444 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74445 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74446 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74447 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74448 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74449 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74450 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74451 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74452 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74453 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74454 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74455 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74456 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74457 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74458 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74459 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74460 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74461 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74462 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74463 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74464 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74465 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74466 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74467 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74468 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74469 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74470 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74471 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74472 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74473 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74474 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74475 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74476 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74477 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74478 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74479 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74480 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74481 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74482 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74483 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74484 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74485 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74486 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74487 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74488 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74489 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74490 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74491 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74492 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74493 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74494 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74495 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74496 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74497 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74498 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74499 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74500 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74501 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74502 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74503 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74504 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74505 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74506 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74507 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74508 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74509 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74510 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74511 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74512 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74513 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74514 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74515 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74516 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74517 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74518 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74519 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74520 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74521 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74522 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74523 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74524 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74525 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74526 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74527 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74528 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74529 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74530 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74531 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74532 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74533 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74534 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74535 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74536 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74537 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74538 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74539 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74540 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74541 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74542 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74543 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74544 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74545 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74546 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74547 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74548 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74549 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74550 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74551 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74552 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74553 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74554 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74555 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74556 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74557 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74558 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74559 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74560 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74561 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74562 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74563 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74564 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74565 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74566 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74567 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74568 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74569 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74570 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74571 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74572 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74573 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74574 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74575 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74576 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74577 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74578 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74579 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74580 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74581 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74582 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74583 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74584 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74585 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74586 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74587 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74588 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74589 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74590 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74591 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74592 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74593 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74594 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74595 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74596 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74597 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74598 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74599 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74600 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74601 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74602 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74603 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74604 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74605 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74606 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74607 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74608 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74609 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74610 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74611 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74612 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74613 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74614 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74615 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74616 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74617 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74618 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74619 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74620 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74621 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74622 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74623 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74624 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74625 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74626 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74627 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74628 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74629 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74630 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74631 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74632 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74633 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74634 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74635 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74636 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74637 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74638 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74639 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74640 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74641 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74642 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74643 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74644 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74645 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74646 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74647 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74648 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74649 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74650 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74651 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74652 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74653 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74654 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74655 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74656 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74657 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74658 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74659 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74660 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74661 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74662 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74663 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74664 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74665 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74666 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74667 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74668 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74669 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74670 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74671 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74672 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74673 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74674 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74675 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74676 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74677 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74678 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74679 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74680 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74681 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74682 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74683 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74684 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74685 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74686 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74687 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74688 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74689 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74690 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74691 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74692 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74693 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74694 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74695 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74696 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74697 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74698 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74699 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74700 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74701 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74702 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74703 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74704 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74705 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74706 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74707 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74708 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74709 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74710 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74711 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74712 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74713 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74714 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74715 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74716 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74717 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74718 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74719 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74720 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74721 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74722 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74723 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74724 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74725 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74726 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74727 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74728 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74729 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74730 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74731 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74732 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74733 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74734 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74735 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74736 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74737 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74738 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74739 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74740 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74741 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74742 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74743 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74744 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74745 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74746 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74747 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74748 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74749 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74750 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74751 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74752 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74753 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74754 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74755 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74756 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74757 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74758 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74759 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74760 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74761 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74762 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74763 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74764 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74765 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74766 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74767 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74768 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74769 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74770 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74771 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74772 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74773 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74774 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74775 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74776 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74777 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74778 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74779 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74780 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74781 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74782 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74783 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74784 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74785 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74786 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74787 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74788 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74789 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74790 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74791 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74792 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74793 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74794 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74795 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74796 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74797 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74798 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74799 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74800 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74801 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74802 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74803 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74804 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74805 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74806 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74807 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74808 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74809 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74810 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74811 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74812 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74813 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74814 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74815 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74816 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74817 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74818 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74819 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74820 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74821 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74822 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74823 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74824 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74825 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74826 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74827 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74828 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74829 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74830 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74831 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74832 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74833 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74834 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74835 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74836 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74837 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74838 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74839 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74840 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74841 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74842 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74843 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74844 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74845 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74846 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74847 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74848 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74849 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74850 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74851 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74852 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74853 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74854 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74855 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74856 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74857 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74858 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74859 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74860 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74861 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74862 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74863 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74864 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74865 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74866 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74867 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74868 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74869 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74870 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74871 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74872 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74873 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74874 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74875 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74876 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74877 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74878 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74879 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74880 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74881 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74882 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74883 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74884 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74885 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74886 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74887 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74888 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74889 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74890 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74891 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74892 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74893 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74894 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74895 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74896 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74897 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74898 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74899 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74900 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74901 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74902 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74903 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74904 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74905 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74906 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74907 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74908 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74909 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74910 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74911 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74912 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74913 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74914 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74915 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74916 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74917 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74918 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74919 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74920 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74921 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74922 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74923 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74924 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74925 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74926 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74927 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74928 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74929 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74930 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74931 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74932 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74933 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74934 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74935 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74936 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74937 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74938 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74939 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74940 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74941 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74942 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74943 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74944 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74945 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74946 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74947 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74948 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74949 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74950 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74951 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74952 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74953 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74954 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			74955 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74956 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74957 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74958 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74959 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74960 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74961 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74962 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74963 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74964 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74965 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74966 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74967 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74968 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74969 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74970 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74971 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74972 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74973 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74974 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74975 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74976 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74977 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74978 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74979 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74980 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74981 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74982 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74983 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74984 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74985 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74986 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74987 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74988 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74989 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74990 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74991 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74992 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74993 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74994 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74995 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74996 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74997 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74998 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			74999 => [
				'validator'                => new NullableIsInArrayValidator( Values::DATEINTERVAL_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
