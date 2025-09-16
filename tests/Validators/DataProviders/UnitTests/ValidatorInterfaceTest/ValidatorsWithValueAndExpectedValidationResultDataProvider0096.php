<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceOrClassConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfArrayValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0096 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			96000 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96001 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96002 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96003 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96004 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96005 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96006 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96007 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96008 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96009 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96010 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96011 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96012 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96013 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96014 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96015 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96016 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96017 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96018 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96019 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96020 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96021 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96022 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96023 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96024 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96025 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96026 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96027 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96028 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96029 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96030 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96031 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96032 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96033 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96034 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96035 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96036 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96037 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96038 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96039 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96040 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96041 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96042 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96043 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96044 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96045 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96046 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96047 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96048 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96049 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96050 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96051 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96052 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96053 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96054 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96055 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96056 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96057 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96058 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96059 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96060 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96061 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96062 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96063 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96064 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96065 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96066 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96067 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96068 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96069 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96070 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96071 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96072 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96073 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96074 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96075 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96076 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96077 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96078 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96079 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96080 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96081 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96082 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96083 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96084 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96085 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96086 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96087 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96088 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96089 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96090 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96091 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96092 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96093 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96094 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96095 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96096 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			96097 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96098 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96099 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96100 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96101 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96102 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96103 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96104 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96105 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96106 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96107 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96108 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96109 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96110 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96111 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96112 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96113 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96114 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96115 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96116 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96117 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96118 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96119 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96120 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96121 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96122 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96123 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96124 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96125 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96126 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96127 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96128 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96129 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96130 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96131 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96132 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96133 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96134 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96135 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96136 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96137 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96138 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96139 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96140 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96141 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96142 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96143 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96144 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96145 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96146 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96147 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96148 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96149 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96150 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96151 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96152 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96153 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96154 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96155 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96156 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96157 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96158 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96159 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96160 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96161 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96162 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96163 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96164 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96165 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96166 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96167 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96168 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96169 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96170 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96171 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96172 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96173 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96174 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96175 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96176 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96177 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96178 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96179 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96180 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96181 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96182 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96183 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96184 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96185 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96186 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96187 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96188 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96189 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96190 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96191 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96192 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96193 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96194 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96195 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96196 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96197 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96198 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96199 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96200 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96201 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96202 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96203 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96204 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96205 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96206 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96207 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96208 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96209 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96210 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96211 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96212 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96213 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96214 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96215 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96216 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96217 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96218 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96219 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96220 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96221 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96222 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96223 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96224 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96225 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96226 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96227 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96228 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96229 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96230 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96231 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96232 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96233 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96234 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96235 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96236 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96237 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96238 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96239 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96240 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96241 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96242 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96243 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96244 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96245 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96246 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96247 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96248 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96249 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96250 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96251 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96252 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96253 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96254 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96255 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96256 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96257 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96258 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96259 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96260 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96261 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96262 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96263 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96264 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96265 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96266 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96267 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96268 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96269 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96270 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96271 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96272 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96273 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96274 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96275 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96276 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96277 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96278 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96279 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96280 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96281 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96282 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96283 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96284 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96285 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96286 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96287 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			96288 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96289 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96290 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96291 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96292 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96293 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96294 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96295 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96296 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96297 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96298 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96299 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96300 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96301 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96302 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96303 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96304 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			96305 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96306 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96307 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96308 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96309 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96310 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96311 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96312 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96313 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96314 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96315 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96316 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96317 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96318 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96319 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96320 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96321 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96322 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96323 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96324 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96325 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96326 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96327 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96328 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96329 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96330 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96331 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96332 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96333 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96334 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96335 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96336 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96337 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96338 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96339 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96340 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96341 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96342 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96343 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96344 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96345 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96346 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96347 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96348 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96349 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96350 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96351 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96352 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96353 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96354 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96355 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96356 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96357 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96358 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96359 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96360 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96361 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96362 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96363 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96364 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96365 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96366 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96367 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96368 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96369 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96370 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96371 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96372 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96373 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96374 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96375 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96376 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96377 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96378 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96379 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96380 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96381 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96382 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96383 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96384 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96385 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96386 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96387 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96388 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96389 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96390 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96391 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96392 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96393 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96394 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96395 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96396 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96397 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96398 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96399 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96400 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96401 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96402 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96403 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96404 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96405 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96406 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96407 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96408 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96409 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96410 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96411 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96412 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96413 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96414 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96415 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96416 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96417 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96418 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96419 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96420 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96421 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96422 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96423 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96424 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96425 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96426 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96427 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96428 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96429 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96430 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96431 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96432 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96433 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96434 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96435 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96436 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96437 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96438 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96439 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96440 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96441 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96442 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96443 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96444 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96445 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96446 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96447 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96448 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96449 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96450 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96451 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96452 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96453 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96454 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96455 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96456 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96457 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96458 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96459 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96460 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96461 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96462 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96463 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96464 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96465 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96466 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96467 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96468 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96469 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96470 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96471 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96472 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96473 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96474 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96475 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96476 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96477 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96478 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96479 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96480 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96481 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96482 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96483 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96484 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96485 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96486 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96487 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96488 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96489 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96490 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96491 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96492 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96493 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96494 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96495 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96496 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			96497 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96498 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96499 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96500 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96501 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96502 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96503 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96504 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96505 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96506 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96507 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96508 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96509 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96510 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96511 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96512 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			96513 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96514 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96515 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96516 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96517 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96518 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96519 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96520 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96521 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96522 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96523 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96524 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96525 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96526 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96527 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96528 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96529 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96530 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96531 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96532 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96533 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96534 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96535 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96536 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96537 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96538 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96539 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96540 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96541 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96542 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96543 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96544 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96545 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96546 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96547 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96548 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96549 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96550 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96551 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96552 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96553 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96554 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96555 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96556 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96557 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96558 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96559 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96560 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96561 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96562 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96563 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96564 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96565 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96566 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96567 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96568 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96569 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96570 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96571 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96572 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96573 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96574 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96575 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96576 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96577 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96578 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96579 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96580 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96581 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96582 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96583 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96584 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96585 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96586 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96587 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96588 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96589 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96590 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96591 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96592 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96593 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96594 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96595 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96596 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96597 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96598 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96599 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96600 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96601 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96602 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96603 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96604 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96605 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96606 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96607 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96608 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96609 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96610 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96611 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96612 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96613 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96614 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96615 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96616 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96617 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96618 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96619 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96620 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96621 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96622 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96623 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96624 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96625 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96626 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96627 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96628 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96629 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96630 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96631 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96632 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96633 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96634 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96635 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96636 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96637 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96638 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96639 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96640 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96641 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96642 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96643 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96644 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96645 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96646 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96647 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96648 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96649 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96650 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96651 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96652 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96653 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96654 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96655 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96656 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96657 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96658 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96659 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96660 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96661 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96662 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96663 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96664 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96665 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96666 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96667 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96668 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96669 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96670 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96671 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96672 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96673 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96674 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96675 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96676 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96677 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96678 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96679 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96680 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96681 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96682 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96683 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96684 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96685 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96686 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96687 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96688 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96689 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96690 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96691 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96692 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96693 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96694 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96695 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96696 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96697 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96698 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96699 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96700 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96701 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96702 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96703 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			96704 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96705 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96706 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96707 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96708 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96709 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96710 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96711 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96712 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96713 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96714 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96715 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96716 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96717 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96718 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96719 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_1 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96720 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			96721 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96722 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96723 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96724 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96725 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96726 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96727 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96728 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96729 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96730 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96731 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96732 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96733 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96734 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96735 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96736 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96737 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96738 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96739 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96740 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96741 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96742 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96743 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96744 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96745 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96746 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96747 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96748 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96749 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96750 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96751 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96752 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96753 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96754 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96755 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96756 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96757 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96758 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96759 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96760 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96761 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96762 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96763 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96764 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96765 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96766 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96767 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96768 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96769 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96770 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96771 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96772 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96773 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96774 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96775 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96776 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96777 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96778 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96779 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96780 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96781 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96782 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96783 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96784 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96785 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96786 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96787 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96788 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96789 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96790 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96791 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96792 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96793 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96794 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96795 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96796 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96797 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96798 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96799 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96800 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96801 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96802 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96803 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96804 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96805 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96806 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96807 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96808 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96809 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96810 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96811 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96812 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96813 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96814 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96815 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96816 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96817 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96818 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96819 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96820 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96821 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96822 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96823 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96824 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96825 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96826 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96827 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96828 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96829 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96830 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96831 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96832 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96833 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96834 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96835 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96836 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96837 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96838 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96839 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96840 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96841 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96842 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96843 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96844 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96845 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96846 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96847 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96848 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96849 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96850 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96851 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96852 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96853 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96854 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96855 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96856 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96857 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96858 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96859 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96860 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96861 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96862 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96863 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96864 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96865 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96866 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96867 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96868 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96869 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96870 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96871 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96872 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96873 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96874 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96875 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96876 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96877 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96878 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96879 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96880 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96881 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96882 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96883 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96884 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96885 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96886 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96887 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96888 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96889 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96890 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96891 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96892 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96893 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96894 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96895 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96896 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96897 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96898 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96899 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96900 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96901 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96902 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96903 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96904 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96905 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96906 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96907 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96908 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96909 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96910 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96911 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96912 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			96913 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96914 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96915 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96916 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96917 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96918 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96919 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96920 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96921 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96922 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96923 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96924 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96925 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96926 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96927 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CONCRETE_INTERFACE_NAME_2 ),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96928 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			96929 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96930 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96931 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96932 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96933 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96934 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96935 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96936 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96937 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96938 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96939 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96940 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96941 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96942 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96943 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96944 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96945 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96946 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96947 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96948 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96949 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96950 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96951 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96952 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96953 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96954 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96955 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96956 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96957 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96958 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96959 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96960 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96961 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96962 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96963 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96964 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96965 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96966 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96967 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96968 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96969 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96970 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96971 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96972 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96973 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96974 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96975 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96976 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96977 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96978 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96979 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96980 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96981 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96982 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96983 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96984 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96985 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96986 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96987 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96988 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96989 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96990 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96991 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96992 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96993 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96994 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96995 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96996 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96997 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96998 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			96999 => [
				'validator'                => new NullableIsInstanceOfArrayValidator( Values::CLASS_NAME_1 ),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
