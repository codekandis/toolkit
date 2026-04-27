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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0090 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			90000 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90001 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90002 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90003 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90004 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90005 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90006 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90007 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90008 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90009 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90010 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90011 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90012 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90013 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90014 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90015 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90016 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90017 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90018 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90019 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90020 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90021 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90022 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90023 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90024 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90025 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90026 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90027 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90028 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90029 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90030 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90031 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90032 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90033 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90034 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90035 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90036 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90037 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90038 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90039 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90040 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90041 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90042 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90043 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90044 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90045 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90046 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90047 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90048 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90049 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90050 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90051 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90052 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90053 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90054 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90055 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90056 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90057 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90058 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90059 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90060 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90061 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90062 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90063 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90064 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90065 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90066 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90067 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90068 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90069 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90070 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90071 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90072 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90073 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90074 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90075 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90076 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90077 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90078 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90079 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90080 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90081 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90082 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90083 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90084 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90085 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90086 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90087 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90088 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90089 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90090 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90091 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90092 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90093 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90094 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90095 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90096 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90097 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90098 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90099 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90100 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90101 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90102 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90103 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90104 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90105 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90106 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90107 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90108 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90109 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90110 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90111 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90112 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90113 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90114 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90115 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90116 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90117 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90118 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90119 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90120 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90121 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90122 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90123 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90124 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90125 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90126 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90127 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90128 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90129 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90130 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90131 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90132 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90133 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90134 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90135 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90136 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90137 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90138 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90139 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90140 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90141 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90142 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90143 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90144 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90145 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90146 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90147 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90148 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90149 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90150 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90151 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90152 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90153 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90154 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90155 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90156 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90157 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90158 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90159 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90160 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90161 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90162 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90163 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90164 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90165 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90166 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90167 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90168 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90169 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90170 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90171 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90172 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90173 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90174 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90175 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90176 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90177 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90178 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90179 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90180 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90181 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90182 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90183 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90184 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90185 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90186 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90187 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90188 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90189 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90190 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90191 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90192 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90193 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90194 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90195 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90196 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90197 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90198 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90199 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90200 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90201 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90202 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90203 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90204 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90205 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90206 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90207 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90208 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90209 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90210 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90211 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90212 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90213 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90214 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90215 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90216 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90217 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90218 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90219 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90220 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90221 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90222 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90223 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90224 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90225 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90226 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90227 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90228 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90229 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90230 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90231 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90232 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90233 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90234 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90235 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90236 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90237 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90238 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90239 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90240 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90241 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90242 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90243 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90244 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90245 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90246 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90247 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90248 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90249 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90250 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90251 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90252 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90253 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90254 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90255 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90256 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90257 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90258 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90259 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90260 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90261 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90262 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90263 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90264 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90265 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90266 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90267 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90268 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90269 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90270 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90271 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90272 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90273 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90274 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90275 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90276 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90277 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90278 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90279 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90280 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90281 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90282 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90283 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90284 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90285 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90286 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90287 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90288 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90289 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90290 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90291 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90292 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90293 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90294 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90295 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90296 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90297 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90298 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90299 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90300 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90301 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90302 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90303 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90304 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90305 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90306 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90307 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90308 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90309 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90310 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90311 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeObjectMixedArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90312 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90313 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90314 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90315 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90316 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90317 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90318 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90319 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90320 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90321 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90322 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90323 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90324 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90325 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90326 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90327 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90328 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90329 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90330 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90331 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90332 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90333 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90334 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90335 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90336 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90337 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90338 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90339 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90340 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90341 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90342 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90343 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90344 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90345 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90346 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90347 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90348 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90349 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90350 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90351 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90352 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90353 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90354 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90355 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90356 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90357 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90358 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90359 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90360 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90361 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90362 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90363 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90364 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90365 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90366 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90367 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90368 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90369 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90370 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90371 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90372 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90373 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90374 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90375 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90376 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90377 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90378 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90379 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90380 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90381 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90382 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90383 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90384 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90385 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90386 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90387 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90388 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90389 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90390 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90391 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90392 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90393 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90394 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90395 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90396 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90397 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90398 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90399 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90400 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90401 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90402 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90403 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90404 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90405 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90406 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90407 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90408 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90409 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90410 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90411 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90412 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90413 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90414 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90415 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90416 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90417 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90418 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90419 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90420 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90421 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90422 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90423 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90424 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90425 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90426 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90427 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90428 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90429 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90430 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90431 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90432 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90433 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90434 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90435 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90436 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90437 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90438 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90439 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90440 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90441 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90442 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90443 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90444 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90445 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90446 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90447 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90448 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90449 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90450 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90451 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90452 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90453 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90454 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90455 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90456 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90457 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90458 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90459 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90460 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90461 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90462 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90463 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90464 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90465 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90466 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90467 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90468 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90469 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90470 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90471 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90472 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90473 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90474 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90475 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90476 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90477 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90478 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90479 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90480 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90481 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90482 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90483 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90484 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90485 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90486 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90487 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90488 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90489 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90490 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90491 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90492 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90493 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90494 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90495 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90496 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90497 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90498 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90499 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90500 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90501 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90502 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90503 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90504 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90505 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90506 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90507 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90508 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90509 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90510 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90511 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90512 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90513 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90514 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90515 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90516 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90517 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90518 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90519 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90520 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90521 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90522 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90523 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90524 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90525 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90526 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90527 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90528 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90529 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90530 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90531 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90532 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90533 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90534 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90535 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90536 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90537 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90538 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90539 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90540 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90541 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90542 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90543 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90544 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90545 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90546 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90547 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90548 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90549 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90550 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90551 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90552 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90553 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90554 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90555 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90556 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90557 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90558 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90559 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90560 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90561 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90562 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90563 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90564 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90565 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90566 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90567 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90568 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90569 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90570 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90571 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90572 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90573 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90574 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90575 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90576 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90577 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90578 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90579 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90580 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90581 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90582 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90583 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90584 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90585 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90586 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90587 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90588 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90589 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90590 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90591 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90592 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90593 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90594 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90595 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90596 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90597 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90598 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90599 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90600 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90601 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90602 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90603 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90604 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90605 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90606 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90607 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90608 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90609 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90610 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90611 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90612 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90613 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90614 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90615 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90616 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90617 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90618 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90619 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90620 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90621 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90622 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90623 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90624 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90625 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90626 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90627 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90628 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90629 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90630 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90631 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90632 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90633 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90634 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90635 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90636 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90637 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90638 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90639 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90640 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90641 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90642 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90643 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90644 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90645 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90646 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90647 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90648 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90649 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90650 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90651 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90652 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90653 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90654 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90655 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90656 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90657 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90658 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90659 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90660 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90661 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90662 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90663 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90664 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90665 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90666 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90667 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90668 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90669 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90670 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90671 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90672 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90673 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90674 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90675 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90676 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90677 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90678 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90679 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90680 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90681 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90682 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90683 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90684 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90685 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90686 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90687 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90688 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90689 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90690 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90691 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90692 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90693 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90694 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90695 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90696 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90697 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90698 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90699 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90700 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90701 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90702 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90703 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90704 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90705 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90706 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90707 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90708 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90709 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90710 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90711 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90712 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90713 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90714 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90715 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90716 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90717 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90718 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90719 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90720 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90721 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90722 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90723 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90724 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90725 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90726 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90727 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90728 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90729 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90730 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90731 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90732 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90733 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90734 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90735 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90736 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90737 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90738 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90739 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90740 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90741 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90742 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90743 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90744 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90745 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90746 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90747 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90748 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90749 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90750 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90751 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90752 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90753 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90754 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90755 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90756 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90757 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90758 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90759 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90760 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90761 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90762 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90763 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90764 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90765 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90766 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90767 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90768 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90769 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90770 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90771 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90772 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90773 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90774 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90775 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90776 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90777 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90778 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90779 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90780 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90781 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90782 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90783 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90784 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90785 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90786 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90787 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90788 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90789 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90790 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90791 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90792 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90793 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90794 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90795 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90796 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90797 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90798 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90799 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90800 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90801 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90802 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90803 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90804 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90805 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90806 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90807 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90808 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90809 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90810 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90811 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90812 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90813 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90814 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90815 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90816 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90817 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90818 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90819 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90820 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90821 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90822 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90823 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90824 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90825 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90826 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90827 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90828 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90829 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90830 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90831 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90832 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90833 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90834 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90835 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90836 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90837 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90838 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90839 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90840 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90841 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90842 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90843 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90844 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90845 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90846 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90847 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90848 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90849 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90850 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90851 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90852 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90853 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90854 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90855 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90856 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90857 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90858 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90859 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90860 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90861 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90862 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90863 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90864 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90865 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90866 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90867 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90868 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90869 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90870 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90871 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90872 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90873 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90874 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90875 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90876 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90877 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90878 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90879 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90880 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90881 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90882 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90883 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90884 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90885 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90886 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90887 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90888 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90889 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90890 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90891 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90892 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90893 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90894 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90895 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90896 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90897 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90898 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90899 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90900 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90901 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90902 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90903 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90904 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90905 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90906 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90907 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90908 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90909 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90910 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90911 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90912 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90913 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90914 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90915 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90916 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90917 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90918 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90919 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90920 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90921 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90922 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90923 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90924 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90925 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90926 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90927 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90928 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90929 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90930 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90931 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90932 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90933 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90934 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90935 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90936 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90937 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90938 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90939 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90940 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90941 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90942 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90943 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90944 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90945 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90946 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90947 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90948 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90949 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90950 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90951 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			90952 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90953 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90954 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90955 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90956 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90957 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90958 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90959 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90960 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90961 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90962 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90963 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90964 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90965 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90966 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90967 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90968 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90969 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90970 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90971 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90972 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90973 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90974 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90975 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90976 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90977 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90978 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90979 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90980 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90981 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90982 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90983 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90984 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90985 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90986 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90987 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90988 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90989 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90990 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90991 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90992 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90993 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90994 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90995 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90996 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90997 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90998 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			90999 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
