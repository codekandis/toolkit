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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0028 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			28000 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28001 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28002 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28003 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28004 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28005 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28006 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28007 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28008 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28009 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28010 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28011 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28012 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28013 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28014 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28015 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28016 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28017 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28018 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28019 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28020 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28021 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28022 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28023 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28024 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28025 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28026 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28027 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28028 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28029 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28030 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28031 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28032 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28033 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28034 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28035 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28036 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28037 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28038 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28039 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28040 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28041 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28042 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28043 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28044 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28045 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28046 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28047 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28048 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28049 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28050 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28051 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28052 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28053 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28054 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28055 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28056 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28057 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28058 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28059 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28060 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28061 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28062 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28063 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28064 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28065 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28066 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28067 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28068 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28069 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28070 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28071 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28072 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28073 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28074 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28075 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28076 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28077 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28078 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28079 => [
				'validator'                => new IsInArrayValidator( Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28080 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28081 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28082 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28083 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28084 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28085 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28086 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28087 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28088 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28089 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28090 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28091 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28092 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28093 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28094 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28095 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28096 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28097 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28098 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28099 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28100 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28101 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28102 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28103 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28104 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28105 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28106 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28107 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28108 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28109 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28110 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28111 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28112 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28113 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28114 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28115 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28116 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28117 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28118 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28119 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28120 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28121 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28122 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28123 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28124 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28125 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28126 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28127 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28128 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28129 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28130 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28131 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28132 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28133 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28134 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28135 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28136 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28137 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28138 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28139 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28140 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28141 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28142 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28143 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28144 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28145 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28146 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28147 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28148 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28149 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28150 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28151 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28152 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28153 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28154 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28155 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28156 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28157 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28158 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28159 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28160 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28161 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28162 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28163 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28164 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28165 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28166 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28167 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28168 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28169 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28170 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28171 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28172 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28173 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28174 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28175 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28176 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28177 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28178 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28179 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28180 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28181 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28182 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28183 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28184 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28185 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28186 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28187 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28188 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28189 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28190 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28191 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28192 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28193 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28194 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28195 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28196 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28197 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28198 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28199 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28200 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28201 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28202 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28203 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28204 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28205 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28206 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28207 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28208 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28209 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28210 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28211 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28212 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28213 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28214 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28215 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28216 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28217 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28218 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28219 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28220 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28221 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28222 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28223 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28224 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28225 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28226 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28227 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28228 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28229 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28230 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28231 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28232 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28233 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28234 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28235 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28236 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28237 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28238 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28239 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28240 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28241 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28242 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28243 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28244 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28245 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28246 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28247 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28248 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28249 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28250 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28251 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28252 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28253 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28254 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28255 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28256 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28257 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28258 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28259 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28260 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28261 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28262 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28263 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28264 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28265 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28266 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28267 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28268 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28269 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28270 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28271 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28272 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28273 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28274 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28275 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28276 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28277 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28278 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28279 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28280 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28281 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28282 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28283 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28284 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28285 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28286 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28287 => [
				'validator'                => new IsInArrayValidator( Values::REG_EX_ARRAY ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28288 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28289 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28290 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28291 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28292 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28293 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28294 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28295 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28296 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28297 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28298 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28299 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28300 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28301 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28302 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28303 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28304 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28305 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28306 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28307 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28308 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28309 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28310 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28311 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28312 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28313 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28314 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28315 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28316 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28317 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28318 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28319 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28320 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28321 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28322 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28323 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28324 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28325 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28326 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28327 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28328 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28329 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28330 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28331 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28332 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28333 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28334 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28335 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28336 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28337 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28338 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28339 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28340 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28341 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28342 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28343 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28344 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28345 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28346 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28347 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28348 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28349 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28350 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28351 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28352 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28353 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28354 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28355 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28356 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28357 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28358 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28359 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28360 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28361 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28362 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28363 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28364 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28365 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28366 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28367 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28368 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28369 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28370 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28371 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28372 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28373 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28374 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28375 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28376 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28377 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28378 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28379 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28380 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28381 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28382 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28383 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28384 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28385 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28386 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28387 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28388 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28389 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28390 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28391 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28392 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28393 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28394 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28395 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28396 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28397 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28398 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28399 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28400 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28401 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28402 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28403 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28404 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28405 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28406 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28407 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28408 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28409 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28410 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28411 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28412 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28413 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28414 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28415 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28416 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28417 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28418 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28419 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28420 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28421 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28422 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28423 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28424 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28425 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28426 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28427 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28428 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28429 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28430 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28431 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28432 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28433 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28434 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28435 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28436 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28437 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28438 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28439 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28440 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28441 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28442 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28443 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28444 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28445 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28446 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28447 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28448 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28449 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28450 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28451 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28452 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28453 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28454 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28455 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28456 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28457 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28458 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28459 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28460 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28461 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28462 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28463 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28464 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28465 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28466 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28467 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28468 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28469 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28470 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28471 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28472 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28473 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28474 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28475 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28476 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28477 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28478 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28479 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28480 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28481 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28482 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28483 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28484 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28485 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28486 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28487 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28488 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28489 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28490 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28491 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28492 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28493 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28494 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28495 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28496 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28497 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28498 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28499 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28500 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28501 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28502 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28503 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28504 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28505 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28506 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28507 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28508 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28509 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28510 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28511 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28512 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28513 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28514 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28515 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28516 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28517 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28518 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28519 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28520 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28521 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28522 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28523 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28524 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28525 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28526 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28527 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28528 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28529 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28530 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28531 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28532 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28533 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28534 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28535 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28536 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28537 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28538 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28539 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28540 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28541 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28542 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28543 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28544 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28545 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28546 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28547 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28548 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28549 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28550 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28551 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28552 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28553 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28554 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28555 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28556 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28557 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28558 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28559 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28560 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28561 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28562 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28563 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28564 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28565 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28566 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28567 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28568 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28569 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28570 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28571 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28572 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28573 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28574 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28575 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28576 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28577 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28578 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28579 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28580 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28581 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28582 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28583 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28584 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28585 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28586 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28587 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28588 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28589 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28590 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28591 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28592 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28593 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28594 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28595 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28596 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28597 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28598 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28599 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28600 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28601 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28602 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28603 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28604 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28605 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28606 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28607 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28608 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28609 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28610 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28611 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28612 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28613 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28614 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28615 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28616 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28617 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28618 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28619 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28620 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28621 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28622 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28623 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28624 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28625 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28626 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28627 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28628 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28629 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28630 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28631 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28632 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28633 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28634 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28635 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28636 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28637 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28638 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28639 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28640 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28641 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28642 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28643 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28644 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28645 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28646 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28647 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28648 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28649 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28650 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28651 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28652 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28653 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28654 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28655 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28656 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28657 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28658 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28659 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28660 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28661 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28662 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28663 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28664 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28665 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28666 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28667 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28668 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28669 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28670 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28671 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28672 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28673 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28674 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28675 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28676 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28677 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28678 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28679 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28680 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28681 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28682 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28683 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28684 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28685 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28686 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28687 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28688 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28689 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28690 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28691 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28692 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28693 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28694 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28695 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28696 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28697 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28698 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28699 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28700 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28701 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28702 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28703 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectArray2()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28704 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28705 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28706 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28707 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28708 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28709 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28710 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28711 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28712 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28713 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28714 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28715 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28716 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28717 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28718 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28719 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28720 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28721 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28722 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28723 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28724 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28725 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28726 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28727 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28728 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28729 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28730 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28731 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28732 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28733 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28734 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28735 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28736 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28737 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28738 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28739 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28740 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28741 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28742 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28743 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28744 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28745 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28746 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28747 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28748 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28749 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28750 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28751 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28752 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28753 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28754 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28755 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28756 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28757 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28758 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28759 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28760 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28761 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28762 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28763 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28764 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28765 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28766 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28767 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28768 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28769 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28770 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28771 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28772 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28773 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28774 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28775 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28776 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28777 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28778 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28779 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28780 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28781 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28782 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28783 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28784 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28785 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28786 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28787 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28788 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28789 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28790 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28791 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28792 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28793 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28794 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28795 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28796 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28797 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28798 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28799 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28800 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28801 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28802 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28803 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28804 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28805 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28806 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28807 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28808 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28809 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28810 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28811 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28812 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28813 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28814 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28815 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28816 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28817 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28818 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28819 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28820 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28821 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28822 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28823 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28824 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28825 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28826 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28827 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28828 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28829 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28830 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28831 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28832 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28833 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28834 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28835 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28836 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28837 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28838 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28839 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28840 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28841 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28842 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28843 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28844 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28845 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28846 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28847 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28848 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28849 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28850 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28851 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28852 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28853 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28854 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28855 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28856 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28857 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28858 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28859 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28860 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28861 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28862 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28863 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28864 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28865 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28866 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28867 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28868 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28869 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28870 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			28871 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28872 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28873 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28874 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28875 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28876 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28877 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28878 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28879 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28880 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28881 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28882 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28883 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28884 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28885 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28886 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28887 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28888 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28889 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28890 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28891 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28892 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28893 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28894 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28895 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28896 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28897 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28898 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28899 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28900 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28901 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28902 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28903 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28904 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28905 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28906 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28907 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28908 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28909 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28910 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28911 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray1()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28912 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28913 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28914 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28915 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28916 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28917 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28918 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28919 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28920 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28921 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28922 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28923 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28924 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28925 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28926 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28927 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28928 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28929 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28930 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28931 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28932 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28933 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28934 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28935 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28936 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28937 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28938 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28939 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28940 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28941 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28942 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28943 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28944 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28945 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28946 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28947 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28948 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28949 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28950 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28951 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28952 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28953 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28954 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28955 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28956 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28957 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28958 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28959 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28960 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28961 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28962 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28963 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28964 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28965 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28966 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28967 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28968 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28969 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28970 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28971 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28972 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28973 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28974 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28975 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28976 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28977 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28978 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28979 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28980 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28981 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28982 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28983 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28984 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28985 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28986 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28987 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28988 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28989 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28990 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28991 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28992 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28993 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28994 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28995 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28996 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28997 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28998 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			28999 => [
				'validator'                => new IsInArrayValidator(
					Values::createDateTimeImmutableObjectMixedArray2()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
