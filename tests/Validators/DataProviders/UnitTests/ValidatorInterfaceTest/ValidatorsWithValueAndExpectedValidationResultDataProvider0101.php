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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0101 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			101000 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101001 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101002 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101003 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101004 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101005 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101006 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101007 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101008 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101009 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101010 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101011 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101012 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101013 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101014 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101015 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101016 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101017 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101018 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101019 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101020 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101021 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101022 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101023 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101024 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101025 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101026 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101027 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101028 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101029 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101030 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101031 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101032 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101033 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101034 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101035 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101036 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101037 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101038 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101039 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101040 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101041 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101042 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101043 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101044 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101045 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101046 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101047 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101048 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101049 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101050 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101051 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101052 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101053 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101054 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101055 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101056 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101057 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101058 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101059 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101060 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101061 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101062 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101063 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101064 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101065 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101066 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101067 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101068 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101069 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101070 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101071 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101072 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101073 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101074 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101075 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101076 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101077 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101078 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101079 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101080 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101081 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101082 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101083 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101084 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101085 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101086 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101087 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101088 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101089 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101090 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101091 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101092 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101093 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101094 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101095 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101096 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101097 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101098 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101099 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101100 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101101 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101102 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101103 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101104 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101105 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101106 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101107 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101108 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101109 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101110 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101111 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101112 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101113 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101114 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101115 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101116 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101117 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101118 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101119 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101120 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101121 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101122 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101123 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101124 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101125 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101126 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101127 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101128 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101129 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101130 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101131 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101132 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101133 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101134 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101135 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101136 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101137 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101138 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101139 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101140 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101141 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101142 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101143 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101144 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101145 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101146 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101147 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101148 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101149 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101150 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101151 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101152 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101153 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101154 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101155 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101156 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101157 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101158 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101159 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101160 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101161 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101162 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101163 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101164 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101165 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			101166 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101167 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101168 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101169 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101170 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101171 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101172 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101173 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101174 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101175 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			101176 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101177 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101178 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101179 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101180 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101181 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101182 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101183 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101184 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101185 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101186 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101187 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101188 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101189 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101190 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101191 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101192 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101193 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101194 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101195 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101196 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101197 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101198 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101199 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101200 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101201 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101202 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101203 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101204 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101205 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101206 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101207 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101208 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101209 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101210 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101211 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101212 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101213 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101214 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101215 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101216 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101217 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101218 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101219 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101220 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101221 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101222 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101223 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101224 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101225 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101226 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101227 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101228 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101229 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101230 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101231 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101232 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101233 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101234 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101235 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101236 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101237 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101238 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101239 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101240 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101241 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101242 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101243 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101244 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101245 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101246 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101247 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101248 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101249 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101250 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101251 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101252 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101253 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101254 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101255 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101256 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101257 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101258 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101259 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101260 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101261 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101262 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101263 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101264 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101265 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101266 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101267 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101268 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101269 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101270 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101271 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101272 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101273 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101274 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101275 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101276 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101277 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101278 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101279 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101280 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101281 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101282 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101283 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101284 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101285 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101286 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101287 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101288 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101289 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101290 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101291 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101292 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101293 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101294 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101295 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101296 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101297 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101298 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101299 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101300 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101301 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101302 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101303 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101304 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101305 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101306 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101307 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101308 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101309 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101310 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101311 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101312 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101313 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101314 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101315 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101316 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101317 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101318 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101319 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101320 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101321 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101322 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101323 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101324 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101325 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101326 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101327 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101328 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101329 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101330 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101331 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101332 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101333 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101334 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101335 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101336 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101337 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101338 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101339 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101340 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101341 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101342 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101343 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101344 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101345 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101346 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101347 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101348 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101349 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101350 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101351 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101352 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101353 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101354 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101355 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101356 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101357 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101358 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101359 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101360 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101361 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101362 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101363 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101364 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101365 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101366 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101367 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101368 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101369 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101370 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101371 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101372 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101373 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101374 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101375 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101376 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101377 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101378 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101379 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			101380 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101381 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101382 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101383 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101384 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101385 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101386 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101387 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101388 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			101389 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101390 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101391 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101392 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101393 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101394 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101395 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101396 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101397 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101398 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101399 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101400 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101401 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101402 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101403 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101404 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101405 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101406 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101407 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101408 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101409 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101410 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101411 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101412 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101413 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101414 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101415 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101416 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101417 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101418 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101419 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101420 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101421 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101422 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101423 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101424 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101425 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101426 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101427 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101428 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101429 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101430 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101431 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101432 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101433 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101434 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101435 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101436 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101437 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101438 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101439 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101440 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101441 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101442 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101443 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101444 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101445 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101446 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101447 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101448 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101449 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101450 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101451 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101452 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101453 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101454 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101455 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101456 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101457 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101458 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101459 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101460 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101461 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101462 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101463 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101464 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101465 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101466 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101467 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101468 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101469 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101470 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101471 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101472 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101473 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101474 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101475 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			101476 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101477 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101478 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101479 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101480 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101481 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101482 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101483 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101484 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101485 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101486 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101487 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101488 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101489 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101490 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101491 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101492 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101493 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101494 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101495 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101496 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101497 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101498 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101499 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101500 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101501 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101502 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101503 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101504 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101505 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101506 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101507 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101508 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101509 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101510 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101511 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101512 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101513 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101514 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101515 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101516 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101517 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101518 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101519 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101520 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101521 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101522 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101523 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101524 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101525 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101526 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101527 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101528 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101529 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101530 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101531 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101532 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101533 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101534 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101535 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101536 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101537 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101538 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101539 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101540 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101541 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101542 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101543 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101544 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101545 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101546 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101547 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101548 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101549 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101550 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101551 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101552 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101553 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101554 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101555 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101556 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101557 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101558 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101559 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101560 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101561 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101562 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101563 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101564 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101565 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101566 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101567 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101568 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101569 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101570 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101571 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101572 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101573 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101574 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101575 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101576 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101577 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101578 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101579 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101580 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101581 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101582 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101583 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101584 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101585 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101586 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101587 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101588 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101589 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101590 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101591 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101592 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101593 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101594 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101595 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101596 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101597 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101598 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101599 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101600 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101601 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			101602 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101603 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101604 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101605 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101606 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101607 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101608 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101609 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101610 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101611 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101612 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101613 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101614 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101615 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101616 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101617 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101618 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101619 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101620 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101621 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101622 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101623 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101624 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101625 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101626 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101627 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101628 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101629 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101630 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101631 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101632 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101633 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101634 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101635 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101636 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101637 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101638 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101639 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101640 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101641 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101642 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101643 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101644 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101645 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101646 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101647 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101648 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101649 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101650 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101651 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101652 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101653 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101654 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101655 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101656 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101657 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101658 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101659 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101660 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101661 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101662 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101663 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101664 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101665 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101666 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101667 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101668 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101669 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101670 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101671 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101672 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101673 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101674 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101675 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101676 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101677 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101678 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101679 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101680 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101681 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101682 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101683 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101684 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101685 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101686 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101687 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101688 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101689 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			101690 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101691 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101692 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101693 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101694 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101695 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101696 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101697 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101698 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101699 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101700 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101701 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101702 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101703 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101704 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101705 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101706 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101707 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101708 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101709 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101710 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101711 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101712 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101713 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101714 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101715 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101716 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101717 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101718 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101719 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101720 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101721 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101722 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101723 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101724 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101725 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101726 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101727 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101728 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101729 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101730 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101731 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101732 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101733 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101734 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101735 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101736 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101737 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101738 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101739 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101740 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101741 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101742 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101743 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101744 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101745 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101746 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101747 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101748 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101749 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101750 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101751 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101752 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101753 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101754 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101755 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101756 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101757 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101758 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101759 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101760 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101761 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101762 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101763 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101764 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101765 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101766 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101767 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101768 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101769 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101770 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101771 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101772 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101773 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101774 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101775 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101776 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101777 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101778 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101779 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101780 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101781 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101782 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101783 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101784 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101785 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101786 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101787 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101788 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101789 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101790 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101791 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101792 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101793 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101794 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101795 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101796 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101797 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101798 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101799 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101800 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101801 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101802 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101803 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101804 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101805 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101806 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101807 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101808 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101809 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101810 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101811 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101812 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101813 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101814 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			101815 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101816 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101817 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101818 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101819 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101820 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101821 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101822 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101823 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101824 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101825 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101826 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101827 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101828 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101829 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101830 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101831 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101832 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101833 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101834 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101835 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101836 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101837 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101838 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101839 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101840 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101841 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101842 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101843 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101844 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101845 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101846 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101847 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101848 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101849 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101850 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101851 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101852 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101853 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101854 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101855 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101856 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101857 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101858 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101859 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101860 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101861 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101862 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101863 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101864 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101865 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101866 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101867 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101868 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101869 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101870 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101871 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101872 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101873 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101874 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101875 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101876 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101877 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101878 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101879 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101880 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101881 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101882 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101883 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101884 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101885 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101886 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101887 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101888 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101889 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101890 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101891 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101892 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101893 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101894 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101895 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101896 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101897 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101898 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101899 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101900 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101901 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101902 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101903 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101904 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101905 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101906 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101907 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101908 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101909 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101910 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101911 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101912 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101913 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			101914 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101915 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101916 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101917 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101918 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101919 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101920 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101921 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101922 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101923 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101924 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101925 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101926 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101927 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101928 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101929 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101930 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101931 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101932 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101933 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101934 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101935 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101936 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101937 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101938 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101939 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101940 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101941 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101942 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101943 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101944 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101945 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101946 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101947 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101948 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101949 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101950 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101951 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101952 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101953 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101954 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101955 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101956 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101957 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101958 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101959 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101960 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101961 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101962 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101963 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101964 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101965 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101966 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101967 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101968 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101969 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101970 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101971 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101972 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101973 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101974 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101975 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101976 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101977 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101978 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101979 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101980 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101981 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101982 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101983 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101984 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101985 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101986 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101987 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101988 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101989 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101990 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101991 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101992 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101993 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101994 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101995 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101996 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101997 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101998 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			101999 => [
				'validator'                => new NullableIsInstanceOfArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
