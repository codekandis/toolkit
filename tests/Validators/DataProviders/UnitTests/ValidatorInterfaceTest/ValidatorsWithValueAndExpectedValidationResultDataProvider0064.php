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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0064 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			64000 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64001 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64002 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64003 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64004 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64005 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64006 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64007 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64008 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64009 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64010 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64011 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64012 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64013 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64014 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64015 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64016 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64017 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64018 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64019 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64020 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64021 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64022 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64023 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64024 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64025 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64026 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64027 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64028 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64029 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64030 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64031 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64032 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64033 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64034 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64035 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64036 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64037 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64038 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64039 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64040 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64041 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64042 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64043 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64044 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64045 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64046 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64047 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64048 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64049 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64050 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64051 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64052 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64053 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64054 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64055 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64056 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64057 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64058 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64059 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64060 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64061 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64062 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64063 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64064 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64065 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64066 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64067 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64068 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64069 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64070 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64071 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64072 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64073 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64074 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64075 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64076 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64077 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64078 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64079 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64080 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64081 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64082 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64083 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64084 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64085 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64086 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64087 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64088 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64089 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64090 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64091 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64092 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64093 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64094 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64095 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64096 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64097 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64098 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64099 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64100 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64101 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64102 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64103 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64104 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64105 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64106 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64107 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64108 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64109 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64110 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64111 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64112 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64113 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64114 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64115 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64116 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64117 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64118 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64119 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64120 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64121 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64122 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64123 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64124 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64125 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64126 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64127 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64128 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64129 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64130 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64131 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64132 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64133 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64134 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64135 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64136 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64137 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64138 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64139 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64140 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64141 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64142 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64143 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64144 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64145 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64146 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64147 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64148 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64149 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64150 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64151 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64152 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64153 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64154 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64155 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64156 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64157 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64158 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64159 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64160 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64161 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64162 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64163 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64164 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64165 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64166 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64167 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64168 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64169 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64170 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64171 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64172 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64173 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64174 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64175 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64176 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64177 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64178 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64179 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64180 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64181 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64182 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64183 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64184 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64185 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64186 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64187 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64188 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64189 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64190 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64191 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64192 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64193 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64194 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64195 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64196 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64197 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64198 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64199 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64200 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64201 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64202 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64203 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64204 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64205 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64206 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64207 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64208 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64209 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64210 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64211 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64212 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64213 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64214 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64215 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64216 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64217 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64218 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64219 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64220 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64221 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64222 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64223 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64224 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64225 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64226 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64227 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64228 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64229 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64230 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64231 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64232 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64233 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64234 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64235 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64236 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64237 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64238 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64239 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64240 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64241 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64242 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64243 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64244 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64245 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64246 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64247 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64248 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64249 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64250 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64251 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64252 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64253 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64254 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64255 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64256 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64257 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64258 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64259 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64260 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64261 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64262 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64263 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64264 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64265 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64266 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64267 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64268 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64269 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64270 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64271 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64272 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64273 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64274 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64275 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64276 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64277 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64278 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64279 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64280 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64281 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64282 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64283 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64284 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64285 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64286 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64287 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64288 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64289 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64290 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64291 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64292 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64293 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64294 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64295 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64296 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64297 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64298 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64299 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64300 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64301 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64302 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64303 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64304 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64305 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64306 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64307 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64308 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64309 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64310 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64311 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64312 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64313 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64314 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64315 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64316 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64317 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64318 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64319 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64320 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64321 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64322 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64323 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64324 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64325 => [
				'validator'                => new NullableIsDateTimeStringArrayByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64326 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64327 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64328 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64329 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64330 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64331 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64332 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64333 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64334 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64335 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64336 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64337 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64338 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64339 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64340 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64341 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64342 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64343 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64344 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64345 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64346 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64347 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64348 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64349 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64350 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64351 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64352 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64353 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64354 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64355 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64356 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64357 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64358 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64359 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64360 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64361 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64362 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64363 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64364 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64365 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64366 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64367 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64368 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64369 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64370 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64371 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64372 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64373 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64374 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64375 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64376 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64377 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64378 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64379 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64380 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64381 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64382 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64383 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64384 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64385 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64386 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64387 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64388 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64389 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64390 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64391 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64392 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64393 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64394 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64395 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64396 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64397 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64398 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64399 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64400 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64401 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64402 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64403 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64404 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64405 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64406 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64407 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64408 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64409 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64410 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64411 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64412 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64413 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64414 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64415 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64416 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64417 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64418 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64419 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64420 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64421 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64422 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64423 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64424 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64425 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64426 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64427 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64428 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64429 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64430 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64431 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64432 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64433 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64434 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64435 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64436 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64437 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64438 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64439 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64440 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64441 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64442 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64443 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64444 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64445 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64446 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64447 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64448 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64449 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64450 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64451 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64452 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64453 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64454 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64455 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64456 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64457 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64458 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64459 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64460 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64461 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64462 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64463 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64464 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64465 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64466 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64467 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64468 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64469 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64470 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64471 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64472 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64473 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64474 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64475 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64476 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64477 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64478 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64479 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64480 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64481 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64482 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64483 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64484 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64485 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64486 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64487 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64488 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64489 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64490 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64491 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64492 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64493 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64494 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64495 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64496 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64497 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64498 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64499 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64500 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64501 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64502 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64503 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64504 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64505 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64506 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64507 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64508 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64509 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64510 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64511 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64512 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64513 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64514 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64515 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64516 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64517 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64518 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64519 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64520 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64521 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64522 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64523 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64524 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64525 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64526 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64527 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64528 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64529 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64530 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64531 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64532 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64533 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64534 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64535 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64536 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64537 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64538 => [
				'validator'                => new NullableIsDateTimeStringArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64539 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64540 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64541 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64542 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64543 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64544 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64545 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64546 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64547 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64548 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64549 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64550 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64551 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64552 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64553 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64554 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64555 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64556 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64557 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64558 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64559 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64560 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64561 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64562 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64563 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64564 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64565 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64566 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64567 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64568 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64569 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64570 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64571 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64572 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64573 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64574 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64575 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64576 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64577 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64578 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64579 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64580 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64581 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64582 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64583 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64584 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64585 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64586 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64587 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64588 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64589 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64590 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64591 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64592 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64593 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64594 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64595 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64596 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64597 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64598 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64599 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64600 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64601 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64602 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64603 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64604 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64605 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64606 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64607 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64608 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64609 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64610 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64611 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64612 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64613 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64614 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64615 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64616 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64617 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64618 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64619 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64620 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64621 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64622 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64623 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64624 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64625 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64626 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64627 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64628 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64629 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64630 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64631 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64632 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64633 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64634 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64635 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64636 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64637 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64638 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64639 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64640 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64641 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64642 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64643 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64644 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64645 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64646 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64647 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64648 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64649 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64650 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64651 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64652 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64653 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64654 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64655 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64656 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64657 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64658 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64659 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64660 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64661 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64662 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64663 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64664 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64665 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64666 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64667 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64668 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64669 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64670 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64671 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64672 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64673 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64674 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64675 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64676 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64677 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64678 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64679 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64680 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64681 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64682 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64683 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64684 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64685 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64686 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64687 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64688 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64689 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64690 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64691 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64692 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64693 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64694 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64695 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64696 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64697 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64698 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64699 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64700 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64701 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64702 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64703 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64704 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64705 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64706 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64707 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64708 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64709 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64710 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64711 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64712 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64713 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64714 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64715 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64716 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64717 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64718 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64719 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64720 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64721 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64722 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64723 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64724 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64725 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64726 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64727 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64728 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64729 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64730 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64731 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64732 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64733 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64734 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64735 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64736 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64737 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64738 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64739 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64740 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64741 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64742 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64743 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64744 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64745 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64746 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64747 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64748 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64749 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64750 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64751 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64752 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64753 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64754 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64755 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64756 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64757 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64758 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64759 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64760 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64761 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64762 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64763 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64764 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64765 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64766 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64767 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64768 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64769 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64770 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64771 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64772 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64773 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64774 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64775 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64776 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64777 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64778 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64779 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64780 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64781 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64782 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64783 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64784 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64785 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64786 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64787 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64788 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64789 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64790 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64791 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64792 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64793 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64794 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64795 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64796 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64797 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64798 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64799 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64800 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64801 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64802 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64803 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64804 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64805 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64806 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64807 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64808 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64809 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64810 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64811 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64812 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64813 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64814 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64815 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64816 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64817 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64818 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64819 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64820 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64821 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64822 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64823 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64824 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64825 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64826 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64827 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64828 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64829 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64830 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64831 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64832 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64833 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64834 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64835 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64836 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64837 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64838 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64839 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64840 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64841 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64842 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64843 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64844 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64845 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64846 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64847 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64848 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64849 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64850 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64851 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64852 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64853 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64854 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64855 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64856 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64857 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64858 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64859 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64860 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64861 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64862 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64863 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64864 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64865 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64866 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64867 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64868 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64869 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64870 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64871 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64872 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64873 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64874 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64875 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64876 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64877 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64878 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64879 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64880 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64881 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64882 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64883 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64884 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64885 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64886 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64887 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64888 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64889 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64890 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64891 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64892 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64893 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64894 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64895 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64896 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64897 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64898 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64899 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64900 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64901 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64902 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64903 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64904 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64905 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64906 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64907 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64908 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64909 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64910 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64911 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64912 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64913 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64914 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64915 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64916 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64917 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64918 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64919 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64920 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64921 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64922 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64923 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64924 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64925 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64926 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64927 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64928 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64929 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64930 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64931 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64932 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64933 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64934 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64935 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64936 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64937 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64938 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64939 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64940 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64941 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64942 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64943 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64944 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64945 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64946 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64947 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64948 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64949 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64950 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64951 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64952 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64953 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64954 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64955 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64956 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64957 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64958 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64959 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64960 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64961 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64962 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64963 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64964 => [
				'validator'                => new NullableIsDateTimeStringByFormatValidator(Values::DATE_TIME_FORMAT_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64965 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64966 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64967 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64968 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64969 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64970 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64971 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64972 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64973 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64974 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64975 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64976 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64977 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64978 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64979 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64980 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64981 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64982 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64983 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64984 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64985 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64986 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64987 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64988 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64989 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64990 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64991 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64992 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64993 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64994 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64995 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			64996 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64997 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64998 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			64999 => [
				'validator'                => new NullableIsDateTimeStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
