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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0017 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			17000 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17001 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17002 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17003 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17004 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17005 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17006 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17007 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17008 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17009 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17010 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17011 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17012 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17013 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17014 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17015 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17016 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17017 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17018 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17019 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17020 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17021 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17022 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17023 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17024 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17025 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17026 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17027 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17028 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17029 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17030 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17031 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17032 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17033 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17034 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17035 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17036 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17037 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17038 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17039 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17040 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17041 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17042 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17043 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17044 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17045 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17046 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17047 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17048 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17049 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17050 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17051 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17052 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17053 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17054 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17055 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17056 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17057 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17058 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17059 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17060 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17061 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17062 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17063 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17064 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17065 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17066 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17067 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17068 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17069 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17070 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17071 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17072 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17073 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17074 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17075 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17076 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17077 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17078 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17079 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17080 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17081 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17082 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17083 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17084 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17085 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17086 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17087 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17088 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17089 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17090 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17091 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17092 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17093 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17094 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17095 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17096 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17097 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17098 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17099 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17100 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17101 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17102 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17103 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17104 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17105 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17106 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17107 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17108 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17109 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17110 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17111 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17112 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17113 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17114 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17115 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17116 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17117 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17118 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17119 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17120 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17121 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17122 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17123 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17124 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			17125 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17126 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17127 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17128 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17129 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17130 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17131 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17132 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17133 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17134 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17135 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17136 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17137 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17138 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17139 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17140 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17141 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17142 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17143 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17144 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17145 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17146 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17147 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17148 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17149 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17150 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17151 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17152 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17153 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17154 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17155 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17156 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17157 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17158 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17159 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17160 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17161 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17162 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17163 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17164 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17165 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17166 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17167 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17168 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17169 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17170 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17171 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17172 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17173 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17174 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17175 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17176 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17177 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17178 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17179 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17180 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17181 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17182 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17183 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17184 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17185 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17186 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17187 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17188 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17189 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17190 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17191 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17192 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17193 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17194 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17195 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17196 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17197 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17198 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17199 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17200 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17201 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17202 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17203 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17204 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17205 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17206 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17207 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17208 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17209 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17210 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17211 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17212 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17213 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17214 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17215 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17216 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17217 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17218 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17219 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17220 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17221 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17222 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17223 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17224 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17225 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17226 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17227 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17228 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17229 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17230 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17231 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17232 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17233 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17234 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17235 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17236 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17237 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17238 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17239 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17240 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17241 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17242 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17243 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17244 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17245 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17246 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17247 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17248 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17249 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17250 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17251 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17252 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17253 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17254 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17255 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17256 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17257 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17258 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17259 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17260 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17261 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17262 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17263 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17264 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17265 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17266 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17267 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17268 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17269 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17270 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17271 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17272 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17273 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17274 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17275 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17276 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17277 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17278 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17279 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17280 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17281 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17282 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17283 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17284 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17285 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17286 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17287 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17288 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17289 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17290 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17291 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17292 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17293 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17294 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17295 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17296 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17297 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17298 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17299 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17300 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17301 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17302 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17303 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17304 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17305 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17306 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17307 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17308 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17309 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17310 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17311 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17312 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17313 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17314 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17315 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17316 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17317 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17318 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17319 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17320 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17321 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17322 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17323 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17324 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17325 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17326 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17327 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17328 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17329 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17330 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17331 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			17332 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			17333 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17334 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17335 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17336 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17337 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17338 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17339 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17340 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17341 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17342 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17343 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17344 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17345 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17346 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17347 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17348 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17349 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17350 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17351 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17352 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17353 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17354 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17355 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17356 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17357 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17358 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17359 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17360 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17361 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17362 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17363 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17364 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17365 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17366 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17367 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17368 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17369 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17370 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17371 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17372 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17373 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17374 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17375 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17376 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17377 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17378 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17379 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17380 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17381 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17382 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17383 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17384 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17385 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17386 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17387 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17388 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17389 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17390 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17391 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17392 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17393 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17394 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17395 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17396 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17397 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17398 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17399 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17400 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17401 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17402 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17403 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17404 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17405 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17406 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17407 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17408 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17409 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17410 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17411 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17412 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17413 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17414 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17415 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17416 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17417 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17418 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17419 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17420 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17421 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17422 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17423 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17424 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17425 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17426 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17427 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17428 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17429 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17430 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17431 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17432 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17433 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17434 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17435 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17436 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17437 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17438 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17439 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17440 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17441 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17442 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17443 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17444 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17445 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17446 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17447 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17448 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17449 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17450 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17451 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17452 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17453 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17454 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17455 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17456 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17457 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17458 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17459 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17460 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17461 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17462 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17463 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17464 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17465 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17466 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17467 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17468 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17469 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17470 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17471 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17472 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17473 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17474 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17475 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17476 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17477 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17478 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17479 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17480 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17481 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17482 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17483 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17484 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17485 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17486 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17487 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17488 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17489 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17490 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17491 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17492 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17493 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17494 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17495 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17496 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17497 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17498 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17499 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17500 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17501 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17502 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17503 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17504 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17505 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17506 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17507 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17508 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17509 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17510 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17511 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17512 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17513 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17514 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17515 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17516 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17517 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17518 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17519 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17520 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17521 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17522 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17523 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17524 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17525 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17526 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17527 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17528 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17529 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17530 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17531 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17532 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17533 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17534 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17535 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17536 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17537 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17538 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17539 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			17540 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			17541 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17542 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17543 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17544 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17545 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17546 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17547 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17548 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17549 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17550 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17551 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17552 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17553 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17554 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17555 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17556 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17557 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17558 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17559 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17560 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17561 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17562 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17563 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17564 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17565 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17566 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17567 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17568 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17569 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17570 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17571 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17572 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17573 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17574 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17575 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17576 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17577 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17578 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17579 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17580 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17581 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17582 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17583 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17584 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17585 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17586 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17587 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17588 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17589 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17590 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17591 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17592 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17593 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17594 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17595 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17596 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17597 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17598 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17599 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17600 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17601 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17602 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17603 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17604 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17605 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17606 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17607 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17608 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17609 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17610 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17611 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17612 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17613 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17614 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17615 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17616 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17617 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17618 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17619 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17620 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17621 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17622 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17623 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17624 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17625 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17626 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17627 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17628 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17629 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17630 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17631 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17632 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17633 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17634 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17635 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17636 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17637 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17638 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17639 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17640 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17641 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17642 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17643 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17644 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17645 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17646 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17647 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17648 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17649 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17650 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17651 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17652 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17653 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17654 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17655 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17656 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17657 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17658 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17659 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17660 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17661 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17662 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17663 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17664 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17665 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17666 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17667 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17668 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17669 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17670 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17671 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17672 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17673 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17674 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17675 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17676 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17677 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17678 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17679 => [
				'validator'                => new IsInArrayValidator( Values::DATETIMEZONE_STRING_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17680 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17681 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17682 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17683 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17684 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17685 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17686 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17687 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17688 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17689 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17690 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17691 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17692 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17693 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17694 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17695 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17696 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17697 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17698 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17699 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17700 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17701 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17702 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17703 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17704 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17705 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17706 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17707 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17708 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17709 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17710 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17711 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17712 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17713 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17714 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17715 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17716 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17717 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17718 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17719 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17720 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17721 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17722 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17723 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17724 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17725 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17726 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17727 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17728 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17729 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17730 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17731 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17732 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17733 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17734 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17735 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17736 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17737 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17738 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17739 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17740 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17741 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17742 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17743 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17744 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17745 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17746 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17747 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17748 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17749 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17750 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17751 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17752 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17753 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			17754 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17755 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17756 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17757 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17758 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17759 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17760 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17761 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17762 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17763 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17764 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17765 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17766 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17767 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17768 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17769 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17770 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17771 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17772 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17773 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17774 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17775 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17776 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17777 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17778 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17779 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17780 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17781 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17782 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17783 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17784 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17785 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17786 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17787 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17788 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17789 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17790 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17791 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17792 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17793 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17794 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17795 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17796 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17797 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17798 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17799 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17800 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17801 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17802 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17803 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17804 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17805 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17806 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17807 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17808 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17809 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17810 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17811 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17812 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17813 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17814 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17815 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17816 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17817 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17818 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17819 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17820 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17821 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17822 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17823 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17824 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17825 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17826 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17827 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17828 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17829 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17830 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17831 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17832 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17833 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17834 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17835 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17836 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17837 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17838 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17839 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17840 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17841 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17842 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17843 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17844 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17845 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17846 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17847 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17848 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17849 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17850 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17851 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17852 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17853 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17854 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17855 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17856 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17857 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17858 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17859 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17860 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17861 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17862 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17863 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17864 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17865 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17866 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17867 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17868 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17869 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17870 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17871 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17872 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17873 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17874 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17875 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17876 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17877 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17878 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17879 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17880 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17881 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17882 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17883 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17884 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17885 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17886 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17887 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17888 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17889 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17890 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17891 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17892 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17893 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17894 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17895 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17896 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17897 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17898 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17899 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17900 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17901 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17902 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17903 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17904 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17905 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17906 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17907 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17908 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17909 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17910 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17911 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17912 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17913 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17914 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17915 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17916 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17917 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17918 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17919 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17920 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17921 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17922 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17923 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17924 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17925 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17926 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17927 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17928 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17929 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17930 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17931 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17932 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17933 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17934 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17935 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17936 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17937 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17938 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17939 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17940 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17941 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17942 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17943 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17944 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17945 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17946 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17947 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17948 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17949 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17950 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17951 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17952 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17953 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17954 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17955 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17956 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17957 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17958 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17959 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17960 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17961 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17962 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			17963 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17964 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17965 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17966 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17967 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17968 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17969 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17970 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17971 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17972 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17973 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17974 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17975 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17976 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17977 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17978 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17979 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17980 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17981 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17982 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17983 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17984 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17985 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17986 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17987 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17988 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17989 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17990 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17991 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17992 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17993 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17994 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17995 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17996 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17997 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17998 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			17999 => [
				'validator'                => new IsInArrayValidator( Values::DATEINTERVAL_STRING_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
