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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0088 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			88000 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88001 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88002 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88003 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88004 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88005 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88006 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88007 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88008 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88009 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88010 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88011 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88012 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88013 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88014 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88015 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88016 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88017 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88018 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88019 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88020 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88021 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88022 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88023 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88024 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88025 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88026 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88027 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88028 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88029 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88030 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88031 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88032 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88033 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88034 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88035 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88036 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88037 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88038 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88039 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88040 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88041 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88042 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88043 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88044 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88045 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88046 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88047 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88048 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88049 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88050 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88051 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88052 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88053 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88054 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88055 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88056 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88057 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88058 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88059 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88060 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88061 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88062 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88063 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88064 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88065 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88066 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88067 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88068 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88069 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88070 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88071 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88072 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88073 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88074 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88075 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88076 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88077 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88078 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88079 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88080 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88081 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88082 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88083 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88084 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88085 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88086 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88087 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88088 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88089 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88090 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88091 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88092 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88093 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88094 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88095 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88096 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88097 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88098 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88099 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88100 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88101 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88102 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88103 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88104 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88105 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88106 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88107 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88108 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88109 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88110 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88111 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88112 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88113 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88114 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88115 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88116 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88117 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88118 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88119 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88120 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88121 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88122 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88123 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88124 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88125 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88126 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88127 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88128 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88129 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88130 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88131 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88132 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88133 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88134 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88135 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88136 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88137 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88138 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88139 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88140 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88141 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88142 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88143 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88144 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88145 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88146 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88147 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88148 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88149 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88150 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88151 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88152 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88153 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88154 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88155 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88156 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88157 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88158 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88159 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88160 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88161 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88162 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88163 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88164 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88165 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88166 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88167 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88168 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88169 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88170 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88171 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88172 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88173 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88174 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88175 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88176 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88177 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88178 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88179 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88180 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88181 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88182 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88183 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88184 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88185 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88186 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88187 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88188 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88189 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88190 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88191 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88192 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88193 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88194 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88195 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88196 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88197 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88198 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88199 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88200 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88201 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88202 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88203 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88204 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88205 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88206 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88207 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88208 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88209 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88210 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88211 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88212 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88213 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88214 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88215 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88216 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88217 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88218 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88219 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88220 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88221 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88222 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88223 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88224 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88225 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88226 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88227 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88228 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88229 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88230 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88231 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88232 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88233 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88234 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88235 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88236 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88237 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88238 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88239 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88240 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88241 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88242 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88243 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88244 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88245 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88246 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88247 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88248 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88249 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88250 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88251 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88252 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88253 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88254 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88255 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88256 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88257 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88258 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88259 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88260 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88261 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88262 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88263 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88264 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88265 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88266 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88267 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88268 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88269 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88270 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88271 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88272 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88273 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88274 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88275 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88276 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88277 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88278 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88279 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88280 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88281 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88282 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88283 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88284 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88285 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88286 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88287 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88288 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88289 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88290 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88291 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88292 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88293 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88294 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88295 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88296 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88297 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88298 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88299 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88300 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88301 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88302 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88303 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88304 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88305 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88306 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88307 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88308 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88309 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88310 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88311 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88312 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88313 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88314 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88315 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88316 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88317 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88318 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88319 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88320 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88321 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88322 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88323 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88324 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88325 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88326 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88327 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88328 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88329 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88330 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88331 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88332 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88333 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88334 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88335 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88336 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88337 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88338 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88339 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88340 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88341 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88342 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88343 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88344 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88345 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88346 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88347 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88348 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88349 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88350 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88351 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88352 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88353 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88354 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88355 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88356 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88357 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88358 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88359 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88360 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88361 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88362 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88363 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88364 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88365 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88366 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88367 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88368 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88369 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88370 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88371 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88372 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88373 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88374 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88375 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88376 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88377 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88378 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88379 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88380 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88381 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88382 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88383 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88384 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88385 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88386 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88387 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88388 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88389 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88390 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88391 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88392 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88393 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88394 => [
				'validator'                => new NullableIsInArrayValidator(Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88395 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88396 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88397 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88398 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88399 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88400 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88401 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88402 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88403 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88404 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88405 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88406 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88407 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88408 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88409 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88410 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88411 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88412 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88413 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88414 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88415 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88416 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88417 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88418 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88419 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88420 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88421 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88422 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88423 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88424 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88425 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88426 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88427 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88428 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88429 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88430 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88431 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88432 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88433 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88434 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88435 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88436 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88437 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88438 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88439 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88440 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88441 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88442 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88443 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88444 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88445 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88446 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88447 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88448 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88449 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88450 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88451 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88452 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88453 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88454 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88455 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88456 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88457 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88458 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88459 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88460 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88461 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88462 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88463 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88464 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88465 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88466 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88467 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88468 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88469 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88470 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88471 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88472 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88473 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88474 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88475 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88476 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88477 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88478 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88479 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88480 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88481 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88482 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88483 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88484 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88485 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88486 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88487 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88488 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88489 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88490 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88491 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88492 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88493 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88494 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88495 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88496 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88497 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88498 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88499 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88500 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88501 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88502 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88503 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88504 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88505 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88506 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88507 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88508 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88509 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88510 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88511 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88512 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88513 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88514 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88515 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88516 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88517 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88518 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88519 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88520 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88521 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88522 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88523 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88524 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88525 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88526 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88527 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88528 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88529 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88530 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88531 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88532 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88533 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88534 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88535 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88536 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88537 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88538 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88539 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88540 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88541 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88542 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88543 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88544 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88545 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88546 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88547 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88548 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88549 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88550 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88551 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88552 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88553 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88554 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88555 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88556 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88557 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88558 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88559 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88560 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88561 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88562 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88563 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88564 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88565 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88566 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88567 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88568 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88569 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88570 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88571 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88572 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88573 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88574 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88575 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88576 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88577 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88578 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88579 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88580 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88581 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88582 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88583 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88584 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88585 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88586 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88587 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88588 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88589 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88590 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88591 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88592 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88593 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88594 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88595 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88596 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88597 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88598 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88599 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88600 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88601 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88602 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88603 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88604 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88605 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88606 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88607 => [
				'validator'                => new NullableIsInArrayValidator(Values::REG_EX_ARRAY),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88608 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88609 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88610 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88611 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88612 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88613 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88614 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88615 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88616 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88617 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88618 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88619 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88620 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88621 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88622 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88623 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88624 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88625 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88626 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88627 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88628 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88629 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88630 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88631 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88632 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88633 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88634 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88635 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88636 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88637 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88638 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88639 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88640 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88641 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88642 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88643 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88644 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88645 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88646 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88647 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88648 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88649 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88650 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88651 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88652 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88653 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88654 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88655 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88656 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88657 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88658 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88659 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88660 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88661 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88662 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88663 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88664 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88665 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88666 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88667 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88668 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88669 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88670 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88671 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88672 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88673 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88674 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88675 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88676 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88677 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88678 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88679 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88680 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88681 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88682 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88683 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88684 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88685 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88686 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88687 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88688 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88689 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88690 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88691 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88692 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88693 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88694 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88695 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88696 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88697 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88698 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88699 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88700 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88701 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88702 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88703 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88704 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88705 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88706 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88707 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88708 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88709 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88710 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88711 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88712 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88713 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88714 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88715 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88716 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88717 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88718 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88719 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88720 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88721 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88722 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88723 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88724 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88725 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88726 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88727 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88728 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88729 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88730 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88731 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88732 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88733 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88734 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88735 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88736 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88737 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88738 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88739 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88740 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88741 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88742 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88743 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88744 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88745 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88746 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88747 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88748 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88749 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88750 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88751 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88752 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88753 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88754 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88755 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88756 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88757 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88758 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88759 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88760 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88761 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88762 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88763 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88764 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88765 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88766 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88767 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88768 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88769 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88770 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88771 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88772 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88773 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88774 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88775 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88776 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88777 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88778 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88779 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88780 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88781 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88782 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88783 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88784 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88785 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88786 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88787 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88788 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88789 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88790 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88791 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88792 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88793 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88794 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88795 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88796 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88797 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88798 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88799 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88800 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88801 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88802 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88803 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88804 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88805 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88806 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88807 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88808 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88809 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88810 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88811 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88812 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88813 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88814 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88815 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88816 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88817 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88818 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88819 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88820 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88821 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88822 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88823 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88824 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88825 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88826 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88827 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88828 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88829 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88830 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88831 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88832 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88833 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88834 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88835 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88836 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88837 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88838 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88839 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88840 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88841 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88842 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88843 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88844 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88845 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88846 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88847 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88848 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88849 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88850 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88851 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88852 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88853 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88854 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88855 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88856 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88857 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88858 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88859 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88860 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88861 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88862 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88863 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88864 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88865 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88866 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88867 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88868 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88869 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88870 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88871 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88872 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88873 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88874 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88875 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88876 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88877 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88878 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88879 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88880 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88881 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88882 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88883 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88884 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88885 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88886 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88887 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88888 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88889 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88890 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88891 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88892 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88893 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88894 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88895 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88896 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88897 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88898 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88899 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88900 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88901 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88902 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88903 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88904 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88905 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88906 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88907 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88908 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88909 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88910 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88911 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88912 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88913 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88914 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88915 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88916 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88917 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88918 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88919 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88920 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88921 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88922 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88923 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88924 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88925 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88926 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88927 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88928 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88929 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88930 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88931 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88932 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88933 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88934 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88935 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88936 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88937 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88938 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88939 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88940 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88941 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88942 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88943 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88944 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88945 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88946 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88947 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88948 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88949 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88950 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88951 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88952 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88953 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88954 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88955 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88956 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88957 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88958 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88959 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88960 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88961 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88962 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88963 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88964 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88965 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88966 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88967 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88968 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88969 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88970 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88971 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88972 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88973 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88974 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88975 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88976 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88977 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88978 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88979 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88980 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88981 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88982 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88983 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88984 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88985 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88986 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88987 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88988 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88989 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88990 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88991 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88992 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88993 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			88994 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88995 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88996 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88997 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88998 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			88999 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeImmutableObjectArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
