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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0110 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			110000 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110001 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110002 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110003 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110004 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110005 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110006 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110007 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110008 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110009 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110010 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110011 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110012 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110013 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110014 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110015 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110016 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110017 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110018 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110019 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110020 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110021 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110022 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110023 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110024 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110025 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110026 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110027 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110028 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110029 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110030 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110031 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110032 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110033 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110034 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110035 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110036 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110037 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110038 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110039 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110040 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110041 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110042 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110043 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110044 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110045 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110046 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110047 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110048 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110049 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110050 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110051 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110052 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110053 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110054 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110055 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110056 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110057 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110058 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110059 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110060 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110061 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110062 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110063 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110064 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110065 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110066 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110067 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110068 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110069 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110070 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110071 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110072 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110073 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110074 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110075 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110076 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110077 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110078 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110079 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110080 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110081 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110082 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110083 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110084 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110085 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110086 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110087 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110088 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110089 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110090 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110091 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110092 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110093 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110094 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110095 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110096 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110097 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110098 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110099 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110100 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110101 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110102 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110103 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110104 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110105 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110106 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110107 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110108 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110109 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110110 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110111 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110112 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110113 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110114 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110115 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110116 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110117 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110118 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110119 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110120 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110121 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110122 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110123 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110124 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110125 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110126 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110127 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110128 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110129 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110130 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110131 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110132 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110133 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110134 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110135 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110136 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110137 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110138 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110139 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110140 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110141 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110142 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110143 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110144 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110145 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110146 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110147 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110148 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110149 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110150 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110151 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110152 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110153 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110154 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110155 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110156 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110157 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110158 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110159 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110160 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110161 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110162 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110163 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110164 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110165 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110166 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110167 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110168 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110169 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110170 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110171 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110172 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110173 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110174 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110175 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110176 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110177 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110178 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110179 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110180 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110181 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110182 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110183 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110184 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110185 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110186 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110187 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110188 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110189 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110190 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110191 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110192 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110193 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110194 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110195 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110196 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110197 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110198 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110199 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110200 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110201 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110202 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110203 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110204 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110205 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110206 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110207 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110208 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110209 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110210 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110211 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110212 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110213 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110214 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110215 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110216 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110217 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110218 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110219 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110220 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110221 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110222 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110223 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110224 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110225 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110226 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110227 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110228 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110229 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110230 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110231 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110232 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110233 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110234 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110235 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110236 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110237 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110238 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110239 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110240 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110241 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110242 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110243 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110244 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110245 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110246 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110247 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110248 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110249 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110250 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110251 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110252 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110253 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110254 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110255 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110256 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110257 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110258 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110259 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110260 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110261 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110262 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110263 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110264 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110265 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110266 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110267 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110268 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110269 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110270 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110271 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110272 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110273 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110274 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110275 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110276 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110277 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110278 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110279 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110280 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110281 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110282 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110283 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110284 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110285 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110286 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110287 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110288 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110289 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110290 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110291 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110292 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110293 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110294 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110295 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110296 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110297 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110298 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110299 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110300 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110301 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110302 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110303 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110304 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110305 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110306 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110307 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110308 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110309 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110310 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110311 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110312 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110313 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110314 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110315 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110316 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110317 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110318 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110319 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110320 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110321 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110322 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110323 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110324 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110325 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110326 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110327 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110328 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110329 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110330 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110331 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110332 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110333 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110334 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110335 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110336 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110337 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110338 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110339 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110340 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110341 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110342 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110343 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110344 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110345 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110346 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110347 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110348 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110349 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110350 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110351 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110352 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110353 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110354 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110355 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110356 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110357 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110358 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110359 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110360 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110361 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110362 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110363 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110364 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110365 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110366 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110367 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110368 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110369 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110370 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110371 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110372 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110373 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110374 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110375 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110376 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110377 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110378 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110379 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110380 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110381 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110382 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110383 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110384 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110385 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110386 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110387 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110388 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110389 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110390 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110391 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110392 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110393 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110394 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110395 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110396 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110397 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110398 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110399 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110400 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110401 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110402 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110403 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110404 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110405 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110406 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110407 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110408 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110409 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110410 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110411 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110412 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110413 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110414 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110415 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110416 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110417 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110418 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110419 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110420 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110421 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110422 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110423 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110424 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110425 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110426 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110427 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110428 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110429 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110430 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110431 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110432 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110433 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110434 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110435 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110436 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110437 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110438 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110439 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110440 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110441 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110442 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110443 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110444 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110445 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110446 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110447 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110448 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110449 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110450 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110451 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110452 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110453 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110454 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110455 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110456 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110457 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110458 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110459 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110460 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110461 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110462 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110463 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110464 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110465 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110466 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110467 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110468 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110469 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110470 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110471 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110472 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110473 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110474 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110475 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110476 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110477 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110478 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110479 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110480 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110481 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110482 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110483 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110484 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110485 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110486 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110487 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110488 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110489 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110490 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110491 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110492 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110493 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110494 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110495 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110496 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110497 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110498 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110499 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110500 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110501 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110502 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110503 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110504 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110505 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110506 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110507 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110508 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110509 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110510 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110511 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110512 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110513 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110514 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110515 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110516 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110517 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110518 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110519 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110520 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110521 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110522 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110523 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110524 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110525 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110526 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110527 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110528 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110529 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110530 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110531 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110532 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110533 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110534 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110535 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110536 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110537 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110538 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110539 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110540 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110541 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110542 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110543 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110544 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110545 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110546 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110547 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110548 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110549 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110550 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110551 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110552 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110553 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110554 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110555 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110556 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110557 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110558 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110559 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110560 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110561 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110562 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110563 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110564 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110565 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110566 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110567 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110568 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110569 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110570 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110571 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110572 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110573 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110574 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110575 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110576 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110577 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110578 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110579 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110580 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110581 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110582 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110583 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110584 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110585 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110586 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110587 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110588 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110589 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110590 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110591 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110592 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110593 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110594 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110595 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110596 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110597 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110598 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110599 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110600 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110601 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110602 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110603 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110604 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110605 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110606 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110607 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110608 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110609 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110610 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110611 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110612 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110613 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110614 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110615 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110616 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110617 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110618 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110619 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110620 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110621 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110622 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110623 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110624 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110625 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110626 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110627 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110628 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110629 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110630 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110631 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110632 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110633 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110634 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110635 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110636 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110637 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110638 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110639 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110640 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110641 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110642 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110643 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110644 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110645 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110646 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110647 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110648 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110649 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110650 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110651 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110652 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110653 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110654 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110655 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110656 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110657 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110658 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110659 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110660 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110661 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110662 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110663 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110664 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110665 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110666 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110667 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110668 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110669 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110670 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110671 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110672 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110673 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110674 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110675 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110676 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110677 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110678 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110679 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110680 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110681 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110682 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110683 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110684 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110685 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110686 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110687 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110688 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110689 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110690 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110691 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110692 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110693 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110694 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110695 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110696 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110697 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110698 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110699 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110700 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110701 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110702 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110703 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110704 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110705 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110706 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110707 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110708 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110709 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110710 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110711 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110712 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110713 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110714 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110715 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110716 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110717 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110718 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110719 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110720 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110721 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110722 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110723 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110724 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110725 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110726 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110727 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110728 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110729 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110730 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110731 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110732 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110733 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110734 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110735 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110736 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110737 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110738 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110739 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110740 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110741 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110742 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110743 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110744 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110745 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110746 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110747 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110748 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110749 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110750 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110751 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110752 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110753 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110754 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110755 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110756 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110757 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110758 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110759 => [
				'validator'                => new NullableIsMatchingRegularExpressionValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110760 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110761 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110762 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110763 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110764 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110765 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110766 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110767 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110768 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110769 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110770 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110771 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110772 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110773 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110774 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110775 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110776 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110777 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110778 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110779 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110780 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110781 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110782 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110783 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110784 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110785 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110786 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110787 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110788 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110789 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110790 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110791 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110792 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110793 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110794 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110795 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110796 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110797 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110798 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110799 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110800 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110801 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110802 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110803 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110804 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110805 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110806 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110807 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110808 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110809 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110810 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110811 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110812 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110813 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110814 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110815 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110816 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110817 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110818 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110819 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110820 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110821 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110822 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110823 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110824 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110825 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110826 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110827 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110828 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110829 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110830 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110831 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110832 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110833 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110834 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110835 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110836 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110837 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110838 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110839 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110840 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110841 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110842 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110843 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110844 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110845 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110846 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110847 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110848 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110849 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110850 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110851 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110852 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110853 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110854 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110855 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110856 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110857 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110858 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110859 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110860 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110861 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110862 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110863 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110864 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110865 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110866 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110867 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110868 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110869 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110870 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110871 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110872 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110873 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110874 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110875 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110876 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110877 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110878 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110879 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110880 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110881 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110882 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110883 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110884 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110885 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110886 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110887 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110888 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110889 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110890 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110891 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110892 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110893 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110894 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110895 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110896 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110897 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110898 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110899 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110900 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110901 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110902 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110903 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110904 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110905 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110906 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110907 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110908 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110909 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110910 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110911 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110912 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110913 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110914 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110915 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110916 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110917 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110918 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110919 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110920 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110921 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110922 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110923 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110924 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110925 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110926 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110927 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110928 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110929 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110930 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110931 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110932 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110933 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110934 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110935 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110936 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110937 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110938 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110939 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110940 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110941 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110942 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110943 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110944 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110945 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110946 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110947 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110948 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110949 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110950 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110951 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110952 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110953 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110954 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110955 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110956 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110957 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110958 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110959 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110960 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110961 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110962 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110963 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110964 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110965 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110966 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110967 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110968 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110969 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110970 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110971 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110972 => [
				'validator'                => new NullableIsNonEmptyStringArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110973 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110974 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110975 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110976 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110977 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110978 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110979 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110980 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110981 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110982 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110983 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110984 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110985 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110986 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110987 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110988 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110989 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110990 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110991 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110992 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110993 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110994 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110995 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110996 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110997 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			110998 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			110999 => [
				'validator'                => new NullableIsNonEmptyStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
