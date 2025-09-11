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
use CodeKandis\ToolKit\Validators\MappedValidators\NullableMappedObjectValidator;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0120 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			120000 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120001 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120002 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120003 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120004 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120005 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120006 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120007 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120008 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120009 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120010 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120011 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120012 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120013 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120014 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120015 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120016 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120017 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120018 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120019 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120020 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120021 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120022 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120023 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120024 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120025 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120026 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120027 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120028 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120029 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120030 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120031 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120032 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120033 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120034 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120035 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120036 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120037 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120038 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120039 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120040 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120041 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120042 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120043 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120044 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120045 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120046 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120047 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120048 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120049 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120050 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120051 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120052 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120053 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120054 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120055 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120056 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120057 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120058 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120059 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120060 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120061 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120062 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120063 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120064 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120065 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120066 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120067 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120068 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120069 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120070 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120071 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120072 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120073 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120074 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120075 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120076 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120077 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120078 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120079 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120080 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120081 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120082 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120083 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120084 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120085 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120086 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120087 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120088 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120089 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120090 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120091 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120092 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120093 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120094 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120095 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120096 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120097 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120098 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120099 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120100 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120101 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120102 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120103 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120104 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120105 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120106 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120107 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120108 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120109 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120110 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120111 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120112 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120113 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120114 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120115 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120116 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120117 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120118 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120119 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120120 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120121 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120122 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120123 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120124 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120125 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120126 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120127 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120128 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120129 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120130 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120131 => [
				'validator'                => new NullableMappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120132 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120133 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120134 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120135 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120136 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120137 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120138 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120139 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120140 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120141 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120142 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120143 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120144 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120145 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120146 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120147 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120148 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120149 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120150 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120151 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120152 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120153 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120154 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120155 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120156 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120157 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120158 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120159 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120160 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120161 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120162 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120163 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120164 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120165 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120166 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120167 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120168 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120169 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120170 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120171 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120172 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120173 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120174 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120175 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120176 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120177 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120178 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120179 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120180 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120181 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120182 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120183 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120184 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120185 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120186 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120187 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120188 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120189 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120190 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120191 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120192 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120193 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120194 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120195 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120196 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120197 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120198 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120199 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120200 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120201 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120202 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120203 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120204 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120205 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120206 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120207 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120208 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120209 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120210 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120211 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120212 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120213 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120214 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120215 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120216 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120217 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120218 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120219 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120220 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120221 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120222 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120223 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120224 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120225 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120226 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120227 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120228 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120229 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120230 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120231 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120232 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120233 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120234 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120235 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120236 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120237 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120238 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120239 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120240 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120241 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120242 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120243 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120244 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120245 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120246 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120247 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120248 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120249 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120250 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120251 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120252 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120253 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120254 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120255 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120256 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120257 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120258 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120259 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120260 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120261 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120262 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120263 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120264 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120265 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120266 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120267 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120268 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120269 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120270 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120271 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120272 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120273 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120274 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120275 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120276 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120277 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120278 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120279 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120280 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120281 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120282 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120283 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120284 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120285 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120286 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120287 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120288 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120289 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120290 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120291 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120292 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120293 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120294 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120295 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120296 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120297 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120298 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120299 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120300 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120301 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120302 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120303 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120304 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120305 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120306 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120307 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120308 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120309 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120310 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120311 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120312 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120313 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120314 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120315 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120316 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120317 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120318 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120319 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120320 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120321 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120322 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120323 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120324 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120325 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120326 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120327 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120328 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120329 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120330 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120331 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120332 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120333 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120334 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120335 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120336 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120337 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120338 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120339 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120340 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120341 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120342 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120343 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120344 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120345 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120346 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120347 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120348 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120349 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120350 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120351 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120352 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120353 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120354 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120355 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120356 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120357 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120358 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120359 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120360 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120361 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120362 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120363 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120364 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120365 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120366 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120367 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120368 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120369 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120370 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120371 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120372 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120373 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120374 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120375 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120376 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120377 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120378 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120379 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120380 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120381 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120382 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120383 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120384 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120385 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120386 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120387 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120388 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120389 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120390 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120391 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120392 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120393 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120394 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120395 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120396 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120397 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120398 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120399 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120400 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120401 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120402 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120403 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120404 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120405 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120406 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120407 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120408 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120409 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120410 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120411 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120412 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120413 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120414 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120415 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120416 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120417 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120418 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120419 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120420 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120421 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120422 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120423 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120424 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120425 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120426 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120427 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120428 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120429 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120430 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120431 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120432 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120433 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120434 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120435 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120436 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120437 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120438 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120439 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120440 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120441 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120442 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120443 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120444 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120445 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120446 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120447 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120448 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120449 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120450 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120451 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120452 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120453 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120454 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120455 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120456 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120457 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120458 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120459 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120460 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120461 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120462 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120463 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120464 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120465 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120466 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120467 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120468 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120469 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120470 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120471 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120472 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120473 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120474 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120475 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120476 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120477 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120478 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120479 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120480 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120481 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120482 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120483 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120484 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120485 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120486 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120487 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120488 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120489 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120490 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120491 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120492 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120493 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120494 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120495 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120496 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120497 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120498 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120499 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120500 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120501 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120502 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120503 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120504 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120505 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120506 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120507 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120508 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120509 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120510 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120511 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120512 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120513 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120514 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120515 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120516 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120517 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120518 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120519 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120520 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120521 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120522 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120523 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120524 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120525 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120526 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120527 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120528 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120529 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120530 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120531 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120532 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120533 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120534 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120535 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120536 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120537 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120538 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120539 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120540 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120541 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120542 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120543 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120544 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120545 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120546 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120547 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120548 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120549 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120550 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120551 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120552 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120553 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120554 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120555 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120556 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120557 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120558 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			120559 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120560 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120561 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120562 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120563 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120564 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120565 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120566 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120567 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120568 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120569 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120570 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120571 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120572 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120573 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120574 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120575 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120576 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120577 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120578 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120579 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120580 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120581 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120582 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120583 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120584 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120585 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120586 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120587 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120588 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120589 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120590 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120591 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120592 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120593 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120594 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120595 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120596 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120597 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120598 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120599 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120600 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120601 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120602 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120603 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120604 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120605 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120606 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120607 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120608 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120609 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120610 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120611 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120612 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120613 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120614 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120615 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120616 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120617 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120618 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120619 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120620 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120621 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120622 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120623 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120624 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120625 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120626 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120627 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120628 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120629 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120630 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120631 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120632 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120633 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120634 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120635 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120636 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120637 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120638 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120639 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120640 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120641 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120642 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120643 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120644 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120645 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120646 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120647 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120648 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120649 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120650 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120651 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120652 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120653 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120654 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120655 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120656 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120657 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120658 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120659 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120660 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120661 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120662 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120663 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120664 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120665 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120666 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120667 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120668 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120669 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120670 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120671 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120672 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120673 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120674 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120675 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120676 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120677 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120678 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120679 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120680 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120681 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120682 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120683 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120684 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120685 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120686 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120687 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120688 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120689 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120690 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120691 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120692 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120693 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120694 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120695 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120696 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120697 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120698 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120699 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120700 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120701 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120702 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120703 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120704 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120705 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120706 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120707 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120708 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120709 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120710 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120711 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120712 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120713 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120714 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120715 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120716 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120717 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120718 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120719 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120720 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120721 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120722 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120723 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120724 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120725 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120726 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120727 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120728 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120729 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120730 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120731 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120732 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120733 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120734 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120735 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120736 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120737 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120738 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120739 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120740 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120741 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120742 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120743 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120744 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120745 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120746 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120747 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120748 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120749 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120750 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120751 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120752 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120753 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120754 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120755 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120756 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120757 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120758 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120759 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120760 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120761 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120762 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120763 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120764 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120765 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120766 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120767 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120768 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120769 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			120770 => [
				'validator'                => new NullableMappedObjectValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
