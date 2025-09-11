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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0080 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			80000 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80001 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80002 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80003 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80004 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80005 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80006 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80007 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80008 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80009 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80010 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80011 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80012 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80013 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80014 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80015 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80016 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80017 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80018 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80019 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80020 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80021 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80022 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80023 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80024 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80025 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80026 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80027 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80028 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80029 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80030 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80031 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80032 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80033 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80034 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80035 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80036 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80037 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80038 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80039 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80040 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80041 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80042 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80043 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80044 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80045 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80046 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80047 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80048 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80049 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80050 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80051 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80052 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80053 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80054 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80055 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80056 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80057 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80058 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80059 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80060 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80061 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80062 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80063 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80064 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80065 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80066 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80067 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80068 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80069 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80070 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80071 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80072 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80073 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80074 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80075 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80076 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80077 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80078 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80079 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80080 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80081 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80082 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80083 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80084 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80085 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80086 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80087 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80088 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80089 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80090 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80091 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80092 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80093 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80094 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80095 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80096 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80097 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80098 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80099 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80100 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80101 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80102 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80103 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80104 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80105 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80106 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80107 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80108 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80109 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80110 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80111 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80112 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80113 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80114 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80115 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80116 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80117 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80118 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80119 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80120 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80121 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80122 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80123 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80124 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80125 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80126 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80127 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80128 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80129 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80130 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80131 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80132 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80133 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80134 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80135 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80136 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80137 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80138 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80139 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80140 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80141 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80142 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80143 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80144 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80145 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80146 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80147 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80148 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80149 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80150 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80151 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80152 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80153 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80154 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80155 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80156 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80157 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80158 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80159 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80160 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80161 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80162 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80163 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80164 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80165 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80166 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80167 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80168 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80169 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80170 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80171 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80172 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80173 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80174 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80175 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80176 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80177 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80178 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80179 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80180 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80181 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80182 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80183 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80184 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80185 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80186 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80187 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80188 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80189 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80190 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80191 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80192 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80193 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80194 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80195 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80196 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80197 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80198 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80199 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80200 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80201 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80202 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80203 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80204 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80205 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80206 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80207 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80208 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80209 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80210 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80211 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80212 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80213 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80214 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80215 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80216 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80217 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80218 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80219 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80220 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80221 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80222 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80223 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80224 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80225 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80226 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80227 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80228 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80229 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80230 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80231 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80232 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80233 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80234 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80235 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80236 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80237 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80238 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80239 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80240 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80241 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80242 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80243 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80244 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80245 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80246 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80247 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80248 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80249 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80250 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80251 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80252 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80253 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80254 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80255 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80256 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80257 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80258 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80259 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80260 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80261 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80262 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80263 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80264 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80265 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80266 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80267 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80268 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80269 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80270 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80271 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80272 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80273 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80274 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80275 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80276 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80277 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80278 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80279 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80280 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80281 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80282 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80283 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80284 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80285 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80286 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80287 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80288 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80289 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80290 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80291 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80292 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80293 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80294 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80295 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80296 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80297 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80298 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80299 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80300 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80301 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80302 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80303 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80304 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80305 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80306 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80307 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80308 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80309 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80310 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80311 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80312 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80313 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80314 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80315 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80316 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80317 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80318 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80319 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80320 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80321 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80322 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80323 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80324 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80325 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80326 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80327 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80328 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80329 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80330 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80331 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80332 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80333 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80334 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80335 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80336 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80337 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80338 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80339 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80340 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80341 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80342 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80343 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80344 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80345 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80346 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80347 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80348 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80349 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80350 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80351 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80352 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80353 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80354 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80355 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80356 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80357 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80358 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80359 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80360 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80361 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80362 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80363 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80364 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80365 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80366 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80367 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80368 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80369 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80370 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80371 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80372 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80373 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80374 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80375 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80376 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80377 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80378 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80379 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80380 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80381 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80382 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80383 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80384 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80385 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80386 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80387 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80388 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80389 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80390 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80391 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80392 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80393 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80394 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80395 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80396 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80397 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80398 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80399 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80400 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80401 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80402 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80403 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80404 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80405 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80406 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80407 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80408 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80409 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80410 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80411 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80412 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80413 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80414 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80415 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80416 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80417 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80418 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80419 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80420 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80421 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80422 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80423 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80424 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80425 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80426 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80427 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80428 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80429 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80430 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80431 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80432 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80433 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80434 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80435 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80436 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80437 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80438 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80439 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80440 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80441 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80442 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80443 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80444 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80445 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80446 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80447 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80448 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80449 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80450 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80451 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80452 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80453 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80454 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80455 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80456 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80457 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80458 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80459 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80460 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80461 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80462 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80463 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80464 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80465 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80466 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80467 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80468 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80469 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80470 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80471 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80472 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80473 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80474 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80475 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80476 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80477 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80478 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80479 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80480 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80481 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80482 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80483 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80484 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80485 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80486 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80487 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80488 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80489 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80490 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80491 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80492 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80493 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80494 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80495 => [
				'validator'                => new NullableIsInArrayValidator( Values::INTERFACE_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80496 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80497 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80498 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80499 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80500 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80501 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80502 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80503 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80504 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80505 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80506 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80507 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80508 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80509 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80510 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80511 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80512 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80513 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80514 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80515 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80516 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80517 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80518 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80519 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80520 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80521 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80522 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80523 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80524 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80525 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80526 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80527 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80528 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80529 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80530 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80531 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80532 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80533 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80534 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80535 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80536 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80537 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80538 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80539 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80540 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80541 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80542 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80543 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80544 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80545 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80546 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80547 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80548 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80549 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80550 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80551 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80552 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80553 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80554 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80555 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80556 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80557 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80558 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80559 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80560 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80561 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80562 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80563 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80564 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80565 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80566 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80567 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80568 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80569 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80570 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80571 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80572 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80573 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80574 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80575 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80576 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80577 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80578 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80579 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80580 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80581 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80582 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80583 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80584 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80585 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80586 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80587 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80588 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80589 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80590 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80591 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80592 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80593 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80594 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80595 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80596 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80597 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80598 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80599 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80600 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80601 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80602 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80603 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80604 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80605 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80606 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80607 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80608 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80609 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80610 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80611 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80612 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80613 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80614 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80615 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80616 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80617 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80618 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80619 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80620 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80621 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80622 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80623 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80624 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80625 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80626 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80627 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80628 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80629 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80630 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80631 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80632 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80633 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80634 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80635 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80636 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80637 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80638 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80639 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80640 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80641 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80642 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80643 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80644 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80645 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80646 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80647 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80648 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80649 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80650 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80651 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80652 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80653 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80654 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80655 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80656 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80657 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80658 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80659 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80660 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80661 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80662 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80663 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80664 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80665 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80666 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80667 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80668 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80669 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80670 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80671 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80672 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80673 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80674 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80675 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80676 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80677 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80678 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80679 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80680 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80681 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80682 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80683 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80684 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80685 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80686 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80687 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80688 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80689 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80690 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80691 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80692 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80693 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80694 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80695 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80696 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80697 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80698 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80699 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80700 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80701 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80702 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80703 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80704 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80705 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80706 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80707 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80708 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80709 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80710 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80711 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80712 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80713 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80714 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80715 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80716 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80717 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80718 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80719 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80720 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80721 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80722 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80723 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80724 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80725 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80726 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80727 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80728 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80729 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80730 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80731 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80732 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80733 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80734 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80735 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80736 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80737 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80738 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80739 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80740 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80741 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80742 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80743 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80744 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80745 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80746 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80747 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80748 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80749 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80750 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80751 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80752 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80753 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80754 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80755 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80756 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80757 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80758 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80759 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80760 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80761 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80762 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80763 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80764 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80765 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80766 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80767 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80768 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80769 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80770 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80771 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80772 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80773 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80774 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80775 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80776 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80777 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80778 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80779 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80780 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80781 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80782 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80783 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80784 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80785 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80786 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80787 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80788 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80789 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80790 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80791 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80792 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80793 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80794 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80795 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80796 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80797 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80798 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80799 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80800 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80801 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80802 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80803 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80804 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80805 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80806 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80807 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80808 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80809 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80810 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80811 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80812 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80813 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80814 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80815 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80816 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80817 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80818 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80819 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80820 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80821 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80822 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80823 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80824 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80825 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80826 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80827 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80828 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80829 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80830 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80831 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80832 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80833 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80834 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80835 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80836 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80837 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80838 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80839 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80840 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80841 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80842 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80843 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80844 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80845 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80846 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80847 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80848 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80849 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80850 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80851 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80852 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80853 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80854 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80855 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80856 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80857 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80858 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80859 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80860 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80861 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80862 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80863 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80864 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80865 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80866 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80867 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80868 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80869 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80870 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80871 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80872 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80873 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80874 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80875 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80876 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80877 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80878 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80879 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80880 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80881 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80882 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80883 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80884 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80885 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80886 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80887 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80888 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80889 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80890 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80891 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80892 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80893 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80894 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80895 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80896 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80897 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80898 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80899 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80900 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80901 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80902 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80903 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80904 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80905 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80906 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80907 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80908 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80909 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80910 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80911 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80912 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			80913 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80914 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80915 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80916 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80917 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80918 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80919 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80920 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80921 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80922 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80923 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80924 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80925 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80926 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80927 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80928 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80929 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80930 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80931 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80932 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80933 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80934 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80935 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80936 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80937 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80938 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80939 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80940 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80941 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80942 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80943 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80944 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80945 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80946 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80947 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80948 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80949 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80950 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80951 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80952 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80953 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80954 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80955 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80956 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80957 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80958 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80959 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80960 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80961 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80962 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80963 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80964 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80965 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80966 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80967 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80968 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80969 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80970 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80971 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80972 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80973 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80974 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80975 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80976 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80977 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80978 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80979 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80980 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80981 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80982 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80983 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80984 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80985 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80986 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80987 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80988 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80989 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80990 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80991 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80992 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80993 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80994 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80995 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80996 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80997 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80998 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			80999 => [
				'validator'                => new NullableIsInArrayValidator( Values::CLASS_NAME_MIXED_ARRAY_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
