<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedObjectValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0117 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			117000 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117001 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117002 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117003 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117004 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117005 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117006 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117007 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117008 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117009 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117010 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117011 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117012 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117013 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117014 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117015 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117016 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117017 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117018 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117019 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117020 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117021 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117022 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117023 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117024 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117025 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117026 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117027 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117028 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117029 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117030 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117031 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117032 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117033 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117034 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117035 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117036 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117037 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117038 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117039 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117040 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117041 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117042 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117043 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117044 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117045 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117046 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117047 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117048 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117049 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117050 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117051 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117052 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117053 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117054 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117055 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117056 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117057 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117058 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117059 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117060 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117061 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117062 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117063 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117064 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117065 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117066 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117067 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117068 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117069 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117070 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117071 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117072 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117073 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117074 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117075 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117076 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117077 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117078 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117079 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117080 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117081 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117082 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117083 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117084 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117085 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117086 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117087 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117088 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117089 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117090 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117091 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117092 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117093 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117094 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117095 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117096 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117097 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117098 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117099 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117100 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117101 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117102 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117103 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117104 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117105 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117106 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117107 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117108 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117109 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117110 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117111 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117112 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117113 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117114 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117115 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117116 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117117 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117118 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117119 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117120 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117121 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117122 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117123 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117124 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117125 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117126 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117127 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117128 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117129 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117130 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117131 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117132 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117133 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117134 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117135 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117136 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117137 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117138 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117139 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117140 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117141 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117142 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117143 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117144 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117145 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117146 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117147 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117148 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117149 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117150 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117151 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117152 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117153 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117154 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117155 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117156 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117157 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117158 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117159 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117160 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117161 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117162 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117163 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117164 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117165 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117166 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117167 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117168 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117169 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117170 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117171 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117172 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117173 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117174 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117175 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117176 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117177 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117178 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117179 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117180 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117181 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117182 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117183 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117184 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117185 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117186 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117187 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117188 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117189 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117190 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117191 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117192 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117193 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117194 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117195 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117196 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117197 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117198 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117199 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117200 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117201 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117202 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117203 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117204 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117205 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117206 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117207 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117208 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117209 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117210 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117211 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117212 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117213 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117214 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117215 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117216 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117217 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117218 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117219 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117220 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117221 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117222 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117223 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117224 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117225 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117226 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117227 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117228 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117229 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117230 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117231 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117232 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117233 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117234 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117235 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117236 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117237 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117238 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117239 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117240 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117241 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117242 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117243 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117244 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117245 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117246 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117247 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117248 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117249 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117250 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117251 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117252 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117253 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117254 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117255 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117256 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117257 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117258 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117259 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117260 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117261 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117262 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117263 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117264 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117265 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117266 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117267 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117268 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117269 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117270 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117271 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117272 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117273 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117274 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117275 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117276 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117277 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117278 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117279 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117280 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117281 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117282 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117283 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117284 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117285 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117286 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117287 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117288 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117289 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117290 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117291 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117292 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117293 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117294 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117295 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117296 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117297 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117298 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117299 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117300 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117301 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117302 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117303 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117304 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117305 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117306 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117307 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117308 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117309 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117310 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117311 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117312 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117313 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117314 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117315 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117316 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117317 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117318 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117319 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117320 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117321 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117322 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117323 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117324 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117325 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117326 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117327 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117328 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117329 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117330 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117331 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117332 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117333 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117334 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117335 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117336 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117337 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117338 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117339 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117340 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117341 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117342 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117343 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117344 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117345 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117346 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117347 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117348 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117349 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117350 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117351 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117352 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117353 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117354 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117355 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117356 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117357 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117358 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117359 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117360 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117361 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117362 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117363 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117364 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117365 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117366 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117367 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117368 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117369 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117370 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117371 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117372 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117373 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117374 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117375 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117376 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117377 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117378 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117379 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117380 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117381 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117382 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117383 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117384 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117385 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117386 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117387 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117388 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117389 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117390 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117391 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117392 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117393 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117394 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117395 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117396 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117397 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117398 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117399 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117400 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117401 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117402 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117403 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117404 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117405 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117406 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117407 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117408 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117409 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117410 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117411 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117412 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117413 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117414 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117415 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117416 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117417 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117418 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117419 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117420 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117421 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117422 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117423 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117424 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117425 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117426 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117427 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117428 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117429 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117430 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117431 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117432 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117433 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117434 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117435 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117436 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117437 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117438 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117439 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117440 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117441 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117442 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117443 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117444 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117445 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117446 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117447 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117448 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117449 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117450 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117451 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117452 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117453 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117454 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117455 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117456 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117457 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117458 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117459 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117460 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117461 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117462 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117463 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117464 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117465 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117466 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117467 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117468 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117469 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117470 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117471 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117472 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117473 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117474 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117475 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117476 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117477 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117478 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117479 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117480 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117481 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117482 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117483 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117484 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117485 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117486 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117487 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117488 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117489 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117490 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117491 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117492 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117493 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117494 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117495 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117496 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117497 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117498 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117499 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117500 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117501 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117502 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117503 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117504 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117505 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117506 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117507 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117508 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117509 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117510 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117511 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117512 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117513 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117514 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117515 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117516 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117517 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117518 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117519 => [
				'validator'                => new NullableMappedArrayValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117520 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117521 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117522 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117523 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117524 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117525 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117526 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117527 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117528 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117529 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117530 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117531 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117532 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117533 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117534 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117535 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117536 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117537 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117538 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117539 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117540 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117541 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117542 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117543 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117544 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117545 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117546 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117547 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117548 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117549 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117550 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117551 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117552 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117553 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117554 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117555 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117556 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117557 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117558 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117559 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117560 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117561 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117562 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117563 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117564 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117565 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117566 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117567 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117568 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117569 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117570 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117571 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117572 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117573 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117574 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117575 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117576 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117577 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117578 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117579 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117580 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117581 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117582 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117583 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117584 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117585 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117586 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117587 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117588 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117589 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117590 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117591 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117592 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117593 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117594 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117595 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117596 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117597 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117598 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117599 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117600 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117601 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117602 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117603 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117604 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117605 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117606 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117607 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117608 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117609 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117610 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117611 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117612 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117613 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117614 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117615 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117616 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117617 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117618 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117619 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117620 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117621 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117622 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117623 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117624 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117625 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117626 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117627 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117628 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117629 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117630 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117631 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117632 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117633 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117634 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117635 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117636 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117637 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117638 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117639 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117640 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117641 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117642 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117643 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117644 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117645 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117646 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117647 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117648 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117649 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117650 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117651 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117652 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117653 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117654 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117655 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117656 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117657 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117658 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117659 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117660 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117661 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117662 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117663 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117664 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117665 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117666 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117667 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117668 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117669 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117670 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117671 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117672 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117673 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117674 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117675 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117676 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117677 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117678 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117679 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117680 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117681 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117682 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117683 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117684 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117685 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117686 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117687 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117688 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117689 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117690 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117691 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117692 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117693 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117694 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117695 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117696 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117697 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117698 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117699 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117700 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117701 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117702 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117703 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117704 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117705 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117706 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117707 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117708 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117709 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117710 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117711 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117712 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117713 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117714 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117715 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117716 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117717 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117718 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117719 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117720 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117721 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117722 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117723 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117724 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117725 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117726 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117727 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117728 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117729 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117730 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117731 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117732 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117733 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117734 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117735 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117736 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117737 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117738 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117739 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117740 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117741 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117742 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117743 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117744 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117745 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117746 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117747 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117748 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117749 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117750 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117751 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117752 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117753 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117754 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117755 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117756 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117757 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117758 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117759 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117760 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117761 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117762 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117763 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117764 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117765 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117766 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117767 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117768 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117769 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117770 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117771 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117772 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117773 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117774 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117775 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117776 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117777 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117778 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117779 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117780 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117781 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117782 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117783 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117784 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117785 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117786 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117787 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117788 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117789 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117790 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117791 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117792 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117793 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117794 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117795 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117796 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117797 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117798 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117799 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117800 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117801 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117802 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117803 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117804 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117805 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117806 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117807 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117808 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117809 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117810 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117811 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117812 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117813 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117814 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117815 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117816 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117817 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117818 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117819 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117820 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117821 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117822 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117823 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117824 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117825 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117826 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117827 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117828 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117829 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117830 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117831 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117832 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117833 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117834 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117835 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117836 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117837 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117838 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117839 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117840 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117841 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117842 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117843 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117844 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117845 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117846 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117847 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117848 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117849 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117850 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117851 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117852 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117853 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117854 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117855 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117856 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117857 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117858 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117859 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117860 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117861 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117862 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117863 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117864 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117865 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117866 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117867 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117868 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117869 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117870 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117871 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117872 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117873 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117874 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117875 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117876 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117877 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117878 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117879 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117880 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117881 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117882 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117883 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117884 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117885 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117886 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117887 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117888 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117889 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117890 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117891 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117892 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117893 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117894 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117895 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117896 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117897 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117898 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117899 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117900 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117901 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117902 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117903 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117904 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117905 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117906 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117907 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117908 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117909 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117910 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117911 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117912 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117913 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117914 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117915 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117916 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117917 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117918 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117919 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117920 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117921 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117922 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117923 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117924 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117925 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117926 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117927 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117928 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117929 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117930 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117931 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117932 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117933 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117934 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117935 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117936 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			117937 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117938 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117939 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117940 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117941 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117942 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117943 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117944 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117945 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117946 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117947 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117948 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117949 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117950 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117951 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117952 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117953 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117954 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117955 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117956 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117957 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117958 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117959 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117960 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117961 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117962 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117963 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117964 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117965 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117966 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117967 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117968 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117969 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117970 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117971 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117972 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117973 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117974 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117975 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117976 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117977 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117978 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117979 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117980 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117981 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117982 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117983 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117984 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117985 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117986 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117987 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117988 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117989 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117990 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117991 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117992 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117993 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117994 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117995 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117996 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117997 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117998 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			117999 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
