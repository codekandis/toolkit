<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedObjectValidator;
use Override;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0118 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			118000 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118001 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118002 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118003 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118004 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118005 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118006 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118007 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118008 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118009 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118010 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118011 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118012 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118013 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118014 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118015 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118016 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118017 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118018 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118019 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118020 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118021 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118022 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118023 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118024 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118025 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118026 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118027 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118028 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118029 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118030 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118031 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118032 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118033 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118034 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118035 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118036 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118037 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118038 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118039 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118040 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118041 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118042 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118043 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118044 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118045 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118046 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118047 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118048 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118049 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118050 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118051 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118052 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118053 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118054 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118055 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118056 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118057 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118058 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118059 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118060 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118061 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118062 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118063 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118064 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118065 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118066 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118067 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118068 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118069 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118070 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118071 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118072 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118073 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118074 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118075 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118076 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118077 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118078 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118079 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118080 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118081 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118082 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118083 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118084 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118085 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118086 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118087 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118088 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118089 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118090 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118091 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118092 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118093 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118094 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118095 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118096 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118097 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118098 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118099 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118100 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118101 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118102 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118103 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118104 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118105 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118106 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118107 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118108 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118109 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118110 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118111 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118112 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118113 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118114 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118115 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118116 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118117 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118118 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118119 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118120 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118121 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118122 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118123 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118124 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118125 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118126 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118127 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118128 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118129 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118130 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118131 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118132 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118133 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118134 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118135 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118136 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118137 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118138 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118139 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118140 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118141 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118142 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118143 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118144 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118145 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118146 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118147 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118148 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118149 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118150 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118151 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118152 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118153 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118154 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118155 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118156 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118157 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118158 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118159 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118160 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118161 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118162 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118163 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118164 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118165 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118166 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118167 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118168 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118169 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118170 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118171 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118172 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118173 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118174 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118175 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118176 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118177 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118178 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118179 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118180 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118181 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118182 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118183 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118184 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118185 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118186 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118187 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118188 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118189 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118190 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118191 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118192 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118193 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118194 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118195 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118196 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118197 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118198 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118199 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118200 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118201 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118202 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118203 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118204 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118205 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118206 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118207 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118208 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118209 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118210 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118211 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118212 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118213 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118214 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118215 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118216 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118217 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118218 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118219 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118220 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118221 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118222 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118223 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118224 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118225 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118226 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118227 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118228 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118229 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118230 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118231 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118232 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118233 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118234 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118235 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118236 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118237 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118238 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118239 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118240 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118241 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118242 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118243 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118244 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118245 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118246 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118247 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118248 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118249 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118250 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118251 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118252 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118253 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118254 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118255 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118256 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118257 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118258 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118259 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118260 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118261 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118262 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118263 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118264 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118265 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118266 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118267 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118268 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118269 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118270 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118271 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118272 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118273 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118274 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118275 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118276 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118277 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118278 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118279 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118280 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118281 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118282 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118283 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118284 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118285 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118286 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118287 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118288 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118289 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118290 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118291 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118292 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118293 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118294 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118295 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118296 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118297 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118298 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118299 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118300 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118301 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118302 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118303 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118304 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118305 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118306 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118307 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118308 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118309 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118310 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118311 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118312 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118313 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118314 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118315 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118316 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118317 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118318 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118319 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118320 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118321 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118322 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118323 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118324 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118325 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118326 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118327 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118328 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118329 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118330 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118331 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118332 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118333 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118334 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118335 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118336 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118337 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118338 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118339 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118340 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118341 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118342 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118343 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118344 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118345 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118346 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118347 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118348 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118349 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118350 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118351 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createEmptyValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118352 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118353 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118354 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118355 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118356 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118357 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118358 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118359 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118360 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118361 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118362 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118363 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118364 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118365 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118366 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118367 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118368 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118369 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118370 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118371 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118372 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118373 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118374 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118375 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118376 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118377 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118378 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118379 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118380 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118381 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118382 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118383 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118384 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118385 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118386 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118387 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118388 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118389 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118390 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118391 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118392 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118393 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118394 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118395 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118396 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118397 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118398 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118399 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118400 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118401 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118402 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118403 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118404 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118405 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118406 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118407 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118408 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118409 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118410 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118411 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118412 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118413 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118414 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118415 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118416 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118417 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118418 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118419 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118420 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118421 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118422 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118423 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118424 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118425 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118426 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118427 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118428 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118429 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118430 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118431 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118432 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118433 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118434 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118435 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118436 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118437 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118438 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118439 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118440 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118441 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118442 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118443 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118444 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118445 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118446 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118447 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118448 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118449 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118450 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118451 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118452 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118453 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118454 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118455 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118456 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118457 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118458 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118459 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118460 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118461 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118462 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118463 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118464 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118465 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118466 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118467 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118468 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118469 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118470 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118471 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118472 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118473 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118474 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118475 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118476 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118477 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118478 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118479 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118480 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118481 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118482 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118483 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118484 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118485 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118486 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118487 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118488 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118489 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118490 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118491 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118492 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118493 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118494 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118495 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118496 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118497 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118498 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118499 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118500 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118501 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118502 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118503 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118504 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118505 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118506 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118507 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118508 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118509 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118510 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118511 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118512 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118513 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118514 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118515 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118516 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118517 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118518 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118519 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118520 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118521 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118522 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118523 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118524 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118525 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118526 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118527 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118528 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118529 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118530 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118531 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118532 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118533 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118534 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118535 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118536 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118537 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118538 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118539 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118540 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118541 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118542 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118543 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118544 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118545 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118546 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118547 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118548 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118549 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118550 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118551 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118552 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118553 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118554 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118555 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118556 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118557 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118558 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118559 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappings()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118560 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118561 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118562 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118563 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118564 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118565 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118566 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118567 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118568 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118569 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118570 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118571 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118572 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118573 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118574 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118575 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118576 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118577 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118578 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118579 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118580 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118581 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118582 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118583 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118584 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118585 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118586 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118587 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118588 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118589 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118590 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118591 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118592 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118593 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118594 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118595 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118596 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118597 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118598 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118599 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118600 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118601 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118602 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118603 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118604 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118605 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118606 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118607 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118608 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118609 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118610 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118611 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118612 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118613 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118614 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118615 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118616 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118617 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118618 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118619 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118620 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118621 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118622 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118623 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118624 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118625 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118626 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118627 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118628 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118629 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118630 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118631 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118632 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATETIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118633 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118634 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118635 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118636 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118637 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118638 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118639 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118640 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118641 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118642 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118643 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118644 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118645 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118646 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118647 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118648 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118649 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118650 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118651 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118652 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118653 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118654 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118655 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118656 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118657 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118658 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118659 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118660 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118661 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118662 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118663 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118664 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118665 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118666 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118667 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118668 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118669 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118670 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118671 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118672 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118673 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118674 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118675 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118676 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118677 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118678 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118679 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118680 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118681 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118682 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118683 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118684 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118685 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118686 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118687 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118688 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118689 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118690 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118691 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118692 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118693 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118694 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118695 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118696 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118697 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118698 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118699 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118700 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118701 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118702 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118703 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118704 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118705 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118706 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118707 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118708 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118709 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118710 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118711 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118712 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118713 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118714 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118715 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118716 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118717 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118718 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118719 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118720 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118721 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118722 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118723 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118724 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118725 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118726 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118727 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118728 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118729 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118730 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118731 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118732 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118733 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118734 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118735 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118736 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118737 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118738 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118739 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118740 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118741 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118742 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118743 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118744 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118745 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118746 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118747 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118748 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118749 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118750 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118751 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118752 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118753 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118754 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118755 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118756 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118757 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118758 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118759 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118760 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118761 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118762 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118763 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118764 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118765 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118766 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118767 => [
				'validator'                => new NullableMappedObjectValidator(
					...Values::createValidatorMappingsWithUnknownKey()
				),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
