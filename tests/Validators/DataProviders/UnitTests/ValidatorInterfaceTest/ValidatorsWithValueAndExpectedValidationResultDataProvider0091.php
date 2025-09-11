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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0091 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			91000 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91001 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91002 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91003 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91004 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91005 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91006 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91007 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91008 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91009 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91010 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91011 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91012 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91013 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91014 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91015 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91016 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91017 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91018 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91019 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91020 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91021 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91022 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91023 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91024 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91025 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91026 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91027 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91028 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91029 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91030 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91031 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91032 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91033 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91034 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91035 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91036 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91037 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91038 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91039 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91040 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91041 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91042 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91043 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91044 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91045 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91046 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91047 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91048 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91049 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91050 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91051 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91052 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91053 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91054 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91055 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91056 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91057 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91058 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91059 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91060 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91061 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91062 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91063 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91064 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91065 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91066 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91067 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91068 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91069 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91070 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91071 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91072 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91073 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91074 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91075 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91076 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91077 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91078 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91079 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91080 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91081 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91082 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91083 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91084 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91085 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91086 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91087 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91088 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91089 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91090 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91091 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91092 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91093 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91094 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91095 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91096 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91097 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91098 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91099 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91100 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91101 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91102 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91103 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91104 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91105 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91106 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91107 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91108 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91109 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91110 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91111 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91112 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91113 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91114 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91115 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91116 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91117 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91118 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91119 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91120 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91121 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91122 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91123 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91124 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91125 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91126 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91127 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91128 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91129 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91130 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91131 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91132 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91133 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91134 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91135 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91136 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91137 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91138 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91139 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91140 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91141 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91142 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91143 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91144 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91145 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91146 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91147 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91148 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91149 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91150 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91151 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91152 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91153 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91154 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91155 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91156 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91157 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91158 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91159 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91160 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91161 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91162 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91163 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateTimeZoneObjectMixedArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91164 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91165 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91166 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91167 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91168 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91169 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91170 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91171 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91172 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91173 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91174 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91175 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91176 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91177 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91178 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91179 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91180 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91181 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91182 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91183 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91184 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91185 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91186 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91187 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91188 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91189 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91190 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91191 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91192 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91193 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91194 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91195 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91196 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91197 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91198 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91199 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91200 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91201 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91202 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91203 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91204 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91205 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91206 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91207 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91208 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91209 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91210 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91211 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91212 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91213 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91214 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91215 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91216 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91217 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91218 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91219 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91220 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91221 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91222 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91223 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91224 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91225 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91226 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91227 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91228 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91229 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91230 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91231 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91232 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91233 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91234 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91235 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91236 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91237 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91238 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91239 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91240 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91241 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91242 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91243 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91244 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91245 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91246 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91247 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91248 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91249 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91250 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91251 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91252 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91253 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91254 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91255 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91256 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91257 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91258 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91259 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91260 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91261 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91262 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91263 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91264 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91265 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91266 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91267 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91268 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91269 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91270 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91271 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91272 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91273 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91274 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91275 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91276 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91277 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91278 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91279 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91280 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91281 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91282 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91283 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91284 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91285 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91286 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91287 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91288 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91289 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91290 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91291 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91292 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91293 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91294 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91295 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91296 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91297 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91298 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91299 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91300 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91301 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91302 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91303 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91304 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91305 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91306 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91307 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91308 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91309 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91310 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91311 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91312 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91313 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91314 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91315 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91316 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91317 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91318 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91319 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91320 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91321 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91322 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91323 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91324 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91325 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91326 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91327 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91328 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91329 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91330 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91331 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91332 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91333 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91334 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91335 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91336 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91337 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91338 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91339 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91340 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91341 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91342 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91343 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91344 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91345 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91346 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91347 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91348 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91349 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91350 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91351 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91352 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91353 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91354 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91355 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91356 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91357 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91358 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91359 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91360 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91361 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91362 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91363 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91364 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91365 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91366 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91367 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91368 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91369 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91370 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91371 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91372 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91373 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91374 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91375 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91376 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91377 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91378 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91379 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91380 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91381 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91382 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91383 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91384 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91385 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91386 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91387 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91388 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91389 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91390 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91391 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91392 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91393 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91394 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91395 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91396 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91397 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91398 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91399 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91400 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91401 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91402 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91403 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91404 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91405 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91406 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91407 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91408 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91409 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91410 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91411 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91412 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91413 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91414 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91415 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91416 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91417 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91418 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91419 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91420 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91421 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91422 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91423 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91424 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91425 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91426 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91427 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91428 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91429 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91430 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91431 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91432 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91433 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91434 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91435 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91436 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91437 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91438 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91439 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91440 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91441 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91442 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91443 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91444 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91445 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91446 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91447 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91448 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91449 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91450 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91451 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91452 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91453 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91454 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91455 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91456 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91457 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91458 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91459 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91460 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91461 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91462 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91463 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91464 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91465 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91466 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91467 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91468 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91469 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91470 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91471 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91472 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91473 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91474 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91475 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91476 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91477 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91478 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91479 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91480 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91481 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91482 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91483 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91484 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91485 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91486 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91487 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91488 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91489 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91490 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91491 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91492 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91493 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91494 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91495 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91496 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91497 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91498 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91499 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91500 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91501 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91502 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91503 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91504 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91505 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91506 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91507 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91508 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91509 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91510 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91511 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91512 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91513 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91514 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91515 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91516 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91517 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91518 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91519 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91520 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91521 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91522 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91523 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91524 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91525 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91526 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91527 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91528 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91529 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91530 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91531 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91532 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91533 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91534 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91535 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91536 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91537 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91538 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91539 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91540 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91541 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91542 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91543 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91544 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91545 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91546 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91547 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91548 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91549 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91550 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91551 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91552 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91553 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91554 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91555 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91556 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91557 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91558 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91559 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91560 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91561 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91562 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91563 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91564 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91565 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91566 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91567 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91568 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91569 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91570 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91571 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91572 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91573 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91574 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91575 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91576 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91577 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91578 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91579 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91580 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91581 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91582 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91583 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91584 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91585 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91586 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91587 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91588 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91589 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91590 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91591 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91592 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91593 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91594 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91595 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91596 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91597 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91598 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91599 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91600 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91601 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91602 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91603 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91604 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91605 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91606 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91607 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91608 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91609 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91610 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91611 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91612 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91613 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91614 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91615 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91616 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91617 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91618 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91619 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91620 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91621 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91622 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91623 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91624 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91625 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91626 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91627 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91628 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91629 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91630 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91631 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91632 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91633 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91634 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91635 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91636 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91637 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91638 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91639 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91640 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91641 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91642 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91643 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91644 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91645 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91646 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91647 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91648 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91649 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91650 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91651 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91652 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91653 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91654 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91655 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91656 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91657 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91658 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91659 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91660 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91661 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91662 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91663 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91664 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91665 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91666 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91667 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91668 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91669 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91670 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91671 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91672 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91673 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91674 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91675 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91676 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91677 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91678 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91679 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91680 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91681 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91682 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91683 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91684 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91685 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91686 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91687 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91688 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91689 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91690 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91691 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91692 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91693 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91694 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91695 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91696 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91697 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91698 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91699 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91700 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91701 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91702 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91703 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91704 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91705 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91706 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91707 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91708 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91709 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91710 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91711 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91712 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91713 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91714 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91715 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91716 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91717 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91718 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91719 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91720 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91721 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91722 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91723 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91724 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91725 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91726 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91727 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91728 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91729 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91730 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91731 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91732 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91733 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91734 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91735 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91736 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91737 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91738 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91739 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91740 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91741 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91742 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91743 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91744 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91745 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91746 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91747 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91748 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91749 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91750 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91751 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91752 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91753 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91754 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91755 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91756 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91757 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91758 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91759 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91760 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91761 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91762 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91763 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91764 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91765 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91766 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91767 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91768 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91769 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91770 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91771 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91772 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91773 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91774 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91775 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91776 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91777 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91778 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91779 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91780 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91781 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91782 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91783 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91784 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91785 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91786 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91787 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91788 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91789 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91790 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91791 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91792 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91793 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91794 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91795 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91796 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91797 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91798 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91799 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91800 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91801 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91802 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91803 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91804 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91805 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91806 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91807 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91808 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91809 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91810 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91811 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91812 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91813 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91814 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91815 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91816 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91817 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91818 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91819 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91820 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91821 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91822 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91823 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91824 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91825 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91826 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91827 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91828 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91829 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91830 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91831 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91832 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91833 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91834 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91835 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91836 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91837 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91838 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91839 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91840 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91841 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91842 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91843 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91844 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91845 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91846 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91847 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91848 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91849 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91850 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91851 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91852 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91853 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91854 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91855 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91856 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91857 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91858 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91859 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91860 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91861 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91862 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91863 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91864 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91865 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91866 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91867 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91868 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91869 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91870 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91871 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91872 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91873 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91874 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91875 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91876 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91877 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91878 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91879 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91880 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91881 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91882 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91883 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91884 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91885 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91886 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91887 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91888 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91889 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91890 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91891 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91892 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91893 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91894 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91895 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91896 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91897 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91898 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91899 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91900 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91901 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91902 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91903 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91904 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91905 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91906 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91907 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91908 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91909 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91910 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91911 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91912 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91913 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91914 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91915 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91916 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91917 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91918 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91919 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91920 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91921 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91922 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91923 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91924 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91925 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91926 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91927 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91928 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91929 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91930 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91931 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91932 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91933 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91934 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91935 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91936 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91937 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91938 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91939 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91940 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91941 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91942 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91943 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91944 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91945 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91946 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91947 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91948 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91949 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91950 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91951 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91952 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91953 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91954 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91955 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91956 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91957 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91958 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91959 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91960 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91961 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91962 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91963 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91964 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91965 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91966 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91967 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91968 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91969 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91970 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91971 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91972 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91973 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91974 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91975 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91976 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91977 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91978 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91979 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91980 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91981 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91982 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91983 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91984 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91985 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91986 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91987 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91988 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91989 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91990 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91991 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91992 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91993 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			91994 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91995 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91996 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91997 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91998 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			91999 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
