<?php declare( strict_types = 1 );
namespace CodeKandis\ToolKit\Tests\Validators\DataProviders\UnitTests\ValidatorInterfaceTest;

use CodeKandis\ToolKit\Tests\Validators\Fixtures\Values;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;
use function implode;
use function sprintf;
use CodeKandis\ToolKit\Validators\IsArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsBinaryStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBinaryStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanIntegerValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsBooleanStringValidator;
use CodeKandis\ToolKit\Validators\IsBooleanValidator;
use CodeKandis\ToolKit\Validators\IsClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsClassNameValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalStringValidator;
use CodeKandis\ToolKit\Validators\IsDateIntervalValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeImmutableValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeStringValidator;
use CodeKandis\ToolKit\Validators\IsDateTimeValidator;
use CodeKandis\ToolKit\Validators\IsEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsEnumValidator;
use CodeKandis\ToolKit\Validators\IsFloatArrayValidator;
use CodeKandis\ToolKit\Validators\IsFloatStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsFloatStringValidator;
use CodeKandis\ToolKit\Validators\IsFloatValidator;
use CodeKandis\ToolKit\Validators\IsInArrayValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInClassConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInIntegerBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\IsInInterfaceOrClassConstantsValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\IsInStringBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\IsIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsIntegerBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsIntegerStringValidator;
use CodeKandis\ToolKit\Validators\IsIntegerValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassEnumOrTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassEnumOrTraitNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassOrEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceClassOrEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceNameValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsInterfaceOrClassNameValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\IsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsNonEmptyStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsNonEmptyStringValidator;
use CodeKandis\ToolKit\Validators\IsNullArrayValidator;
use CodeKandis\ToolKit\Validators\IsNullStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsNullStringValidator;
use CodeKandis\ToolKit\Validators\IsNullValidator;
use CodeKandis\ToolKit\Validators\IsObjectArrayValidator;
use CodeKandis\ToolKit\Validators\IsObjectValidator;
use CodeKandis\ToolKit\Validators\IsRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\IsRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\IsScalarArrayValidator;
use CodeKandis\ToolKit\Validators\IsScalarValidator;
use CodeKandis\ToolKit\Validators\IsStringArrayValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\IsStringBackedEnumValidator;
use CodeKandis\ToolKit\Validators\IsStringValidator;
use CodeKandis\ToolKit\Validators\IsSubClassOfArrayValidator;
use CodeKandis\ToolKit\Validators\IsSubClassOfValidator;
use CodeKandis\ToolKit\Validators\IsTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\IsTraitNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsBackedEnumValidator;
use CodeKandis\ToolKit\Validators\NullableIsBinaryStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBinaryStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanIntegerValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsBooleanValidator;
use CodeKandis\ToolKit\Validators\NullableIsClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsClassNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateIntervalValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeImmutableArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeImmutableValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringByFormatValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsDateTimeValidator;
use CodeKandis\ToolKit\Validators\NullableIsEnumArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsEnumValidator;
use CodeKandis\ToolKit\Validators\NullableIsFloatArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsFloatStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsFloatStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsFloatValidator;
use CodeKandis\ToolKit\Validators\NullableIsInArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInClassConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInIntegerBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceOrClassConstantsArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInInterfaceOrClassConstantsValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInstanceOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInStringBackedEnumValuesValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerBackedEnumValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsIntegerValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassEnumOrTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassEnumOrTraitNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassOrEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceClassOrEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceOrClassNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsInterfaceOrClassNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsMatchingRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\NullableIsNonEmptyStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsNonEmptyStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsNullArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsNullStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsNullStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsObjectArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsObjectValidator;
use CodeKandis\ToolKit\Validators\NullableIsRegularExpressionArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsRegularExpressionValidator;
use CodeKandis\ToolKit\Validators\NullableIsScalarArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsScalarValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumNameValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringBackedEnumValidator;
use CodeKandis\ToolKit\Validators\NullableIsStringValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsTraitNameValidator;
use CodeKandis\ToolKit\Validators\NullableValidatorChain;
use CodeKandis\ToolKit\Validators\ValidatorChain;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedObjectValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedArrayValidator;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0119 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			119000 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119001 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119002 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119003 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119004 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119005 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119006 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119007 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119008 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119009 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119010 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119011 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119012 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119013 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119014 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119015 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119016 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119017 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119018 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119019 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119020 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119021 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119022 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119023 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119024 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119025 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119026 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119027 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119028 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119029 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119030 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119031 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119032 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119033 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119034 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119035 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119036 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119037 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119038 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119039 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119040 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119041 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119042 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119043 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119044 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119045 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119046 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119047 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119048 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119049 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119050 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119051 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119052 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119053 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119054 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119055 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119056 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119057 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119058 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119059 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119060 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119061 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119062 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119063 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119064 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119065 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119066 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119067 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119068 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119069 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119070 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119071 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119072 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119073 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119074 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119075 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119076 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119077 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119078 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119079 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119080 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119081 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119082 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119083 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119084 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119085 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119086 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119087 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119088 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119089 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119090 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119091 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119092 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119093 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119094 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119095 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119096 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119097 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119098 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119099 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119100 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119101 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119102 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119103 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119104 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119105 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119106 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119107 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119108 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119109 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119110 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119111 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119112 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119113 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119114 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119115 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119116 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119117 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119118 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119119 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119120 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119121 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119122 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119123 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119124 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119125 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119126 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119127 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119128 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119129 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119130 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119131 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119132 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119133 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119134 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119135 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119136 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119137 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119138 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119139 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119140 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119141 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119142 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119143 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119144 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119145 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119146 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119147 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119148 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119149 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119150 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119151 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119152 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119153 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119154 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119155 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119156 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119157 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119158 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119159 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119160 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119161 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119162 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119163 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119164 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119165 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119166 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119167 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119168 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119169 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119170 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119171 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119172 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119173 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119174 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119175 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119176 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119177 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119178 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119179 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119180 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119181 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119182 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119183 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119184 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119185 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119186 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119187 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119188 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119189 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119190 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119191 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119192 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119193 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119194 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119195 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119196 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119197 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119198 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119199 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119200 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119201 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119202 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119203 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119204 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119205 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119206 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119207 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119208 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119209 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119210 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119211 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119212 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119213 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119214 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119215 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119216 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119217 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119218 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119219 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119220 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119221 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119222 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119223 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119224 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119225 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119226 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119227 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119228 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119229 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119230 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119231 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119232 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119233 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119234 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119235 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119236 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119237 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119238 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119239 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119240 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119241 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119242 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119243 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119244 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119245 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119246 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119247 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119248 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119249 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119250 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119251 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119252 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119253 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119254 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119255 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119256 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119257 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119258 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119259 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119260 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119261 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119262 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119263 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119264 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119265 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119266 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119267 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119268 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119269 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119270 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119271 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119272 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119273 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119274 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119275 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119276 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119277 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119278 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119279 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119280 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119281 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119282 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119283 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119284 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119285 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119286 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119287 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119288 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119289 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119290 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119291 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119292 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119293 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119294 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119295 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119296 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119297 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119298 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119299 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119300 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119301 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119302 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119303 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119304 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119305 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119306 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119307 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119308 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119309 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119310 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119311 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119312 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119313 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119314 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119315 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119316 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119317 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119318 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119319 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119320 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119321 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119322 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119323 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119324 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119325 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119326 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119327 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119328 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119329 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119330 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119331 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119332 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119333 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119334 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119335 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119336 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119337 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119338 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119339 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119340 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119341 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119342 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119343 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119344 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119345 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119346 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119347 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119348 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119349 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119350 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119351 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119352 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119353 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119354 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119355 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119356 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119357 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119358 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119359 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119360 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119361 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119362 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119363 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119364 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119365 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119366 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119367 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119368 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119369 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119370 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119371 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119372 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119373 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119374 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119375 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119376 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119377 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119378 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119379 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119380 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119381 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119382 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119383 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119384 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119385 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119386 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119387 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119388 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119389 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119390 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119391 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119392 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119393 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119394 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119395 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119396 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119397 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119398 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119399 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119400 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119401 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119402 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119403 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119404 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119405 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119406 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119407 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119408 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119409 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119410 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119411 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119412 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119413 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119414 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119415 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119416 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119417 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119418 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119419 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119420 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119421 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119422 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119423 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119424 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119425 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119426 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119427 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119428 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119429 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119430 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119431 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119432 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119433 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119434 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119435 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119436 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119437 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119438 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119439 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119440 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119441 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119442 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119443 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119444 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119445 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119446 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119447 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119448 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119449 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119450 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119451 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119452 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119453 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119454 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119455 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119456 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119457 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119458 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119459 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119460 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119461 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119462 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119463 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119464 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119465 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119466 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119467 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119468 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119469 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119470 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119471 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119472 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119473 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119474 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119475 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119476 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119477 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119478 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119479 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119480 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119481 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119482 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119483 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119484 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119485 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119486 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119487 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119488 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119489 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119490 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119491 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119492 => [
				'validator'                => new MappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119493 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119494 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119495 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119496 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119497 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119498 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119499 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119500 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119501 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119502 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119503 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119504 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119505 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119506 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119507 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119508 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119509 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119510 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119511 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119512 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119513 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119514 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119515 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119516 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119517 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119518 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119519 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119520 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119521 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119522 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119523 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119524 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119525 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119526 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119527 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119528 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119529 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119530 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119531 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119532 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119533 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119534 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119535 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119536 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119537 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119538 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119539 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119540 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119541 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119542 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119543 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119544 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119545 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119546 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119547 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119548 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119549 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119550 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119551 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119552 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119553 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119554 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119555 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119556 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119557 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119558 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119559 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119560 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119561 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119562 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119563 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119564 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119565 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119566 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119567 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119568 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119569 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119570 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119571 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119572 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119573 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119574 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119575 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119576 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119577 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119578 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119579 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119580 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119581 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119582 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119583 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119584 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119585 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119586 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119587 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119588 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119589 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119590 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119591 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119592 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119593 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119594 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119595 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119596 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119597 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119598 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119599 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119600 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119601 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119602 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119603 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119604 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119605 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119606 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119607 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119608 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119609 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119610 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119611 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119612 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119613 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119614 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119615 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119616 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119617 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119618 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119619 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119620 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119621 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119622 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119623 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119624 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119625 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119626 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119627 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119628 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119629 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119630 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119631 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119632 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119633 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119634 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119635 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119636 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119637 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119638 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119639 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119640 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119641 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119642 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119643 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119644 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119645 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119646 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119647 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119648 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119649 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119650 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119651 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119652 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119653 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119654 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119655 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119656 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119657 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119658 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119659 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119660 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119661 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119662 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119663 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119664 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119665 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119666 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119667 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119668 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119669 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119670 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119671 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119672 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119673 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119674 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119675 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119676 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119677 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119678 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119679 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119680 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119681 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119682 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119683 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119684 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119685 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119686 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119687 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119688 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119689 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119690 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119691 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119692 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119693 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119694 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119695 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119696 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119697 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119698 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119699 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119700 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119701 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119702 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119703 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119704 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119705 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119706 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119707 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119708 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119709 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119710 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119711 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119712 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119713 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119714 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119715 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119716 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119717 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119718 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119719 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119720 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119721 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119722 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119723 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119724 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119725 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119726 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119727 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119728 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119729 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119730 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119731 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119732 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119733 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119734 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119735 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119736 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119737 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119738 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119739 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119740 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119741 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119742 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119743 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119744 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119745 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119746 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119747 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119748 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119749 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119750 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119751 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119752 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119753 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119754 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119755 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119756 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119757 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119758 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119759 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119760 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119761 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119762 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119763 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119764 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119765 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119766 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119767 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119768 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119769 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119770 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119771 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119772 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119773 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119774 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119775 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119776 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119777 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119778 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119779 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119780 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119781 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119782 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119783 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119784 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119785 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119786 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119787 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119788 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119789 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119790 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119791 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119792 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119793 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119794 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119795 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119796 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119797 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119798 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119799 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119800 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119801 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119802 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119803 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119804 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119805 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119806 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119807 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119808 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119809 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119810 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119811 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119812 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119813 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119814 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119815 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119816 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119817 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119818 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119819 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119820 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119821 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119822 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119823 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119824 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119825 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119826 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119827 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119828 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119829 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119830 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119831 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119832 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119833 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119834 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119835 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119836 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119837 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119838 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119839 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119840 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119841 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119842 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119843 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119844 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119845 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119846 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119847 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119848 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119849 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119850 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119851 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119852 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119853 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119854 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119855 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119856 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119857 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119858 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119859 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119860 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119861 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119862 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119863 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119864 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119865 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119866 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119867 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119868 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119869 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119870 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119871 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119872 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119873 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119874 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119875 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119876 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119877 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119878 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119879 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119880 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119881 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119882 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119883 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119884 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119885 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119886 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119887 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119888 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119889 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119890 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119891 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119892 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119893 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119894 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119895 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119896 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119897 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119898 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119899 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119900 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119901 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119902 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119903 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119904 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119905 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119906 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119907 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119908 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119909 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119910 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119911 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119912 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119913 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119914 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119915 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119916 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119917 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119918 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119919 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			119920 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119921 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119922 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119923 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119924 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119925 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119926 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119927 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119928 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119929 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119930 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119931 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119932 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119933 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119934 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119935 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119936 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119937 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119938 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119939 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119940 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119941 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119942 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119943 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119944 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119945 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119946 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119947 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119948 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119949 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119950 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119951 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119952 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119953 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119954 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119955 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119956 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119957 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119958 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119959 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119960 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119961 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119962 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119963 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119964 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119965 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119966 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119967 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119968 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119969 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119970 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119971 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119972 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119973 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119974 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119975 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119976 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119977 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119978 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119979 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119980 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119981 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119982 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119983 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119984 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119985 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119986 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119987 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119988 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119989 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119990 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119991 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119992 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119993 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119994 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119995 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119996 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119997 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119998 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			119999 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
