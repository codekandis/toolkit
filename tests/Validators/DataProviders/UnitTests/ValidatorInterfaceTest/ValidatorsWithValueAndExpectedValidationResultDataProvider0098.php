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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0098 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			98000 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98001 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98002 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98003 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98004 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98005 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98006 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98007 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98008 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98009 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98010 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98011 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98012 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98013 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98014 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98015 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98016 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98017 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98018 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98019 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98020 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98021 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98022 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98023 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98024 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98025 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98026 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98027 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98028 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98029 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98030 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98031 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98032 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98033 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98034 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98035 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98036 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98037 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98038 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98039 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98040 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98041 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98042 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98043 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98044 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98045 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98046 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98047 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98048 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98049 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98050 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98051 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98052 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98053 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98054 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98055 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98056 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98057 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98058 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98059 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98060 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98061 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98062 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98063 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98064 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98065 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98066 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98067 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98068 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98069 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98070 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98071 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98072 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98073 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98074 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98075 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98076 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98077 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98078 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98079 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98080 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98081 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98082 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98083 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98084 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98085 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98086 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98087 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98088 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98089 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98090 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98091 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98092 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98093 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98094 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98095 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98096 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98097 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98098 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98099 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98100 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98101 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98102 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98103 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98104 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98105 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98106 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98107 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98108 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98109 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98110 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98111 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98112 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98113 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98114 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98115 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98116 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98117 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98118 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98119 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98120 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98121 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98122 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98123 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98124 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98125 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98126 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98127 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98128 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98129 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98130 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98131 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98132 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98133 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98134 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98135 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98136 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98137 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98138 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98139 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98140 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98141 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98142 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98143 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98144 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98145 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98146 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98147 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98148 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98149 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98150 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98151 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98152 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98153 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98154 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98155 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98156 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98157 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98158 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98159 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98160 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98161 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98162 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98163 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98164 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98165 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98166 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98167 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98168 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98169 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98170 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98171 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98172 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98173 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98174 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98175 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98176 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98177 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98178 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98179 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98180 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98181 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98182 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98183 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98184 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98185 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98186 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98187 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98188 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98189 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98190 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98191 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98192 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98193 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98194 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98195 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98196 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98197 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98198 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98199 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98200 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98201 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98202 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98203 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98204 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98205 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98206 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98207 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98208 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98209 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98210 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98211 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98212 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98213 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98214 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98215 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98216 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98217 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98218 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98219 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98220 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98221 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98222 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98223 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98224 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98225 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98226 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98227 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98228 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98229 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98230 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98231 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98232 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98233 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98234 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98235 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98236 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98237 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98238 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98239 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98240 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98241 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98242 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98243 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98244 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98245 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98246 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98247 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98248 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98249 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98250 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98251 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98252 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98253 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98254 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98255 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98256 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98257 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98258 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98259 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98260 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98261 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98262 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98263 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98264 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98265 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98266 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98267 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98268 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98269 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98270 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98271 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98272 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98273 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98274 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98275 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98276 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98277 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98278 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98279 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98280 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98281 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98282 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98283 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98284 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98285 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98286 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98287 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98288 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98289 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98290 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98291 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98292 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98293 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98294 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98295 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98296 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98297 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98298 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98299 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98300 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98301 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98302 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98303 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98304 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98305 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98306 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98307 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98308 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98309 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98310 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98311 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98312 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98313 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98314 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98315 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98316 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98317 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98318 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98319 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98320 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98321 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98322 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98323 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98324 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98325 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98326 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98327 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98328 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98329 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98330 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98331 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98332 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98333 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98334 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98335 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98336 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98337 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98338 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98339 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98340 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98341 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98342 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98343 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98344 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98345 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98346 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98347 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98348 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98349 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98350 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98351 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98352 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98353 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98354 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98355 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98356 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98357 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98358 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98359 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98360 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98361 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98362 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98363 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98364 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98365 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98366 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98367 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98368 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98369 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98370 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98371 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98372 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98373 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98374 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98375 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98376 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98377 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98378 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98379 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98380 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98381 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98382 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98383 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98384 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98385 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98386 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98387 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98388 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98389 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98390 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98391 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98392 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98393 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98394 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98395 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98396 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98397 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98398 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98399 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98400 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98401 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98402 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98403 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98404 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98405 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98406 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98407 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98408 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98409 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98410 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98411 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98412 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98413 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98414 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98415 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98416 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98417 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98418 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98419 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98420 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98421 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98422 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98423 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98424 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98425 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98426 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98427 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98428 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98429 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98430 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98431 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98432 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98433 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98434 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98435 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98436 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98437 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98438 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98439 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98440 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98441 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98442 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98443 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98444 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98445 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98446 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98447 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98448 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98449 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98450 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98451 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98452 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98453 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98454 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98455 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98456 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98457 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98458 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98459 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98460 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98461 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98462 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98463 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98464 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98465 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98466 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98467 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98468 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98469 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98470 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98471 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98472 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98473 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98474 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98475 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98476 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98477 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98478 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98479 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98480 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98481 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98482 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98483 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98484 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98485 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98486 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98487 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98488 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98489 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98490 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98491 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98492 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98493 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98494 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98495 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98496 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98497 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98498 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98499 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98500 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98501 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98502 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98503 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98504 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98505 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98506 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98507 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98508 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98509 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98510 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98511 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98512 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98513 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98514 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98515 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98516 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98517 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98518 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98519 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98520 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98521 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98522 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98523 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98524 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98525 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98526 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98527 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98528 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98529 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98530 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98531 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98532 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98533 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98534 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98535 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98536 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98537 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98538 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98539 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98540 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98541 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98542 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98543 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98544 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98545 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98546 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98547 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98548 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98549 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98550 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98551 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98552 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98553 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98554 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98555 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98556 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98557 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98558 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98559 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98560 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98561 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98562 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98563 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98564 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98565 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98566 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98567 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98568 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98569 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98570 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98571 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98572 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98573 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98574 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98575 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98576 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98577 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98578 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98579 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98580 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98581 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98582 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98583 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98584 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98585 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98586 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98587 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98588 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98589 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98590 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98591 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98592 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98593 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98594 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98595 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98596 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98597 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98598 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98599 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98600 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98601 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98602 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98603 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98604 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98605 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98606 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98607 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98608 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98609 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98610 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98611 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98612 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98613 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98614 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98615 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98616 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98617 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98618 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98619 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98620 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98621 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98622 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98623 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98624 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98625 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98626 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98627 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98628 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98629 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98630 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98631 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98632 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98633 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98634 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98635 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98636 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98637 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98638 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98639 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98640 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98641 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98642 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98643 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98644 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98645 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98646 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98647 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98648 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98649 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98650 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98651 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98652 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98653 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98654 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98655 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98656 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98657 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98658 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98659 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98660 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98661 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98662 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98663 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98664 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98665 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98666 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98667 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98668 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98669 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98670 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98671 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98672 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98673 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98674 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98675 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98676 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98677 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98678 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98679 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98680 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98681 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98682 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98683 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98684 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98685 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98686 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98687 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98688 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98689 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98690 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98691 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98692 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98693 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98694 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98695 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98696 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98697 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98698 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98699 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98700 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98701 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98702 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98703 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98704 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98705 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98706 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98707 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98708 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98709 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98710 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98711 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98712 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98713 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98714 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98715 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98716 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98717 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98718 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98719 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98720 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98721 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98722 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98723 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98724 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98725 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98726 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98727 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98728 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98729 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98730 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98731 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98732 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98733 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98734 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98735 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98736 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98737 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98738 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98739 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98740 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98741 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98742 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98743 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98744 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98745 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98746 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98747 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98748 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98749 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98750 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98751 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98752 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98753 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98754 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98755 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98756 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98757 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98758 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98759 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98760 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98761 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98762 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98763 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98764 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98765 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98766 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98767 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98768 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98769 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98770 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98771 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98772 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98773 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98774 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98775 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98776 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98777 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98778 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98779 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98780 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98781 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98782 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98783 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98784 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98785 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98786 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98787 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98788 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98789 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98790 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98791 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98792 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98793 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98794 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98795 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98796 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98797 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98798 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98799 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98800 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98801 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98802 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98803 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98804 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98805 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98806 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98807 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98808 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98809 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98810 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98811 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98812 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98813 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98814 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98815 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98816 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98817 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98818 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98819 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98820 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98821 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98822 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98823 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98824 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98825 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98826 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98827 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98828 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98829 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98830 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98831 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98832 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98833 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98834 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98835 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98836 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98837 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98838 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98839 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98840 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98841 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98842 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98843 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98844 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98845 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98846 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98847 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98848 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98849 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98850 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98851 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98852 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98853 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98854 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98855 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98856 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98857 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98858 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98859 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98860 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98861 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98862 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98863 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98864 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98865 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98866 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98867 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98868 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98869 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98870 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98871 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98872 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98873 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98874 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98875 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98876 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98877 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98878 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98879 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98880 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98881 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98882 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98883 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98884 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98885 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98886 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98887 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98888 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98889 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98890 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98891 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98892 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98893 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98894 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98895 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98896 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98897 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98898 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98899 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98900 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98901 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98902 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98903 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98904 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98905 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98906 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98907 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98908 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98909 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98910 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98911 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98912 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98913 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98914 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98915 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98916 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98917 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98918 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98919 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98920 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98921 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98922 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98923 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98924 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98925 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98926 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98927 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98928 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98929 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98930 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98931 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98932 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98933 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98934 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98935 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98936 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98937 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98938 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98939 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98940 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98941 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98942 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98943 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98944 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98945 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			98946 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98947 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98948 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98949 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98950 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98951 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98952 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98953 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98954 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98955 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98956 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98957 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98958 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98959 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98960 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98961 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98962 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98963 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98964 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98965 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98966 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98967 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98968 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98969 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98970 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98971 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98972 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98973 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98974 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98975 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98976 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98977 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98978 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98979 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98980 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98981 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98982 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98983 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98984 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98985 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98986 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98987 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98988 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98989 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98990 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98991 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98992 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98993 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98994 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98995 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98996 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98997 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98998 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			98999 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
