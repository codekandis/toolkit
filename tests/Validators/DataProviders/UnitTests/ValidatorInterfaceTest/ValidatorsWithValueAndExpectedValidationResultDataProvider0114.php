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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0114 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			114000 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114001 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114002 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114003 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114004 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114005 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114006 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114007 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114008 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114009 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114010 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114011 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114012 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114013 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114014 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114015 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114016 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114017 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114018 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114019 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114020 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114021 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114022 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114023 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114024 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114025 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114026 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114027 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114028 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114029 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114030 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114031 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114032 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114033 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114034 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114035 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114036 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114037 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114038 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114039 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114040 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114041 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114042 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114043 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114044 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114045 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114046 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114047 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114048 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114049 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114050 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114051 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114052 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114053 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114054 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114055 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114056 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114057 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114058 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114059 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114060 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114061 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114062 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114063 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114064 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114065 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114066 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114067 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114068 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114069 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114070 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114071 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114072 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114073 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114074 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114075 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114076 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114077 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114078 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114079 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114080 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114081 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114082 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114083 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114084 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114085 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114086 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114087 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114088 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114089 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114090 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114091 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114092 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114093 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114094 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114095 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114096 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114097 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114098 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114099 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114100 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114101 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114102 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114103 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114104 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114105 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114106 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114107 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114108 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114109 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114110 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114111 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114112 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114113 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114114 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114115 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114116 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114117 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114118 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114119 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114120 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114121 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114122 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114123 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114124 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114125 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114126 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114127 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114128 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114129 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114130 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114131 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114132 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114133 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114134 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114135 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114136 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114137 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114138 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114139 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114140 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114141 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114142 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114143 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114144 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114145 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114146 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114147 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114148 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114149 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114150 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114151 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114152 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114153 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114154 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114155 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114156 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114157 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114158 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114159 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114160 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114161 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114162 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114163 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114164 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114165 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114166 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114167 => [
				'validator'                => new NullableIsStringBackedEnumValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114168 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114169 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114170 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114171 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114172 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114173 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114174 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114175 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114176 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114177 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114178 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114179 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114180 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114181 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114182 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114183 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114184 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114185 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114186 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114187 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114188 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114189 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114190 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114191 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114192 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114193 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114194 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114195 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114196 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114197 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114198 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114199 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114200 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114201 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114202 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114203 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114204 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114205 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114206 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114207 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114208 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114209 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114210 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114211 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114212 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114213 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114214 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114215 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114216 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114217 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114218 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114219 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114220 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114221 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114222 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114223 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114224 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114225 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114226 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114227 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114228 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114229 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114230 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114231 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114232 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114233 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114234 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114235 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114236 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114237 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114238 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114239 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114240 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114241 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114242 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114243 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114244 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114245 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114246 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114247 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114248 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114249 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114250 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114251 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114252 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114253 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114254 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114255 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114256 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114257 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114258 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114259 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114260 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114261 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114262 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114263 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114264 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114265 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114266 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114267 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114268 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114269 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114270 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114271 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114272 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114273 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114274 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114275 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114276 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114277 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114278 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114279 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114280 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114281 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114282 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114283 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114284 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114285 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114286 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114287 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114288 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114289 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114290 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114291 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114292 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114293 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114294 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114295 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114296 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114297 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114298 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114299 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114300 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114301 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114302 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114303 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114304 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114305 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114306 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114307 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114308 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114309 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114310 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114311 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114312 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114313 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114314 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114315 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114316 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114317 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114318 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114319 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114320 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114321 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114322 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114323 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114324 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114325 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114326 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114327 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114328 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114329 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114330 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114331 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114332 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114333 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114334 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114335 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114336 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114337 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114338 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114339 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114340 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114341 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114342 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114343 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114344 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114345 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114346 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114347 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114348 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114349 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114350 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114351 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114352 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114353 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114354 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114355 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114356 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114357 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114358 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114359 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114360 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114361 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114362 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114363 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114364 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114365 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114366 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114367 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114368 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114369 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114370 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114371 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114372 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114373 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114374 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114375 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114376 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114377 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114378 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114379 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114380 => [
				'validator'                => new NullableIsStringValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114381 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114382 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114383 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114384 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114385 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114386 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114387 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114388 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114389 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114390 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114391 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114392 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114393 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114394 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114395 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114396 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114397 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114398 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114399 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114400 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114401 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114402 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114403 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114404 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114405 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114406 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114407 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114408 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114409 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114410 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114411 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114412 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114413 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114414 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114415 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114416 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114417 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114418 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114419 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114420 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114421 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114422 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114423 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114424 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114425 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114426 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114427 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114428 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114429 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114430 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114431 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114432 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114433 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114434 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114435 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114436 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114437 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114438 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114439 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114440 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114441 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114442 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114443 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114444 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114445 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114446 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114447 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114448 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114449 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114450 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114451 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114452 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114453 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114454 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114455 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114456 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114457 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114458 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114459 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114460 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114461 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114462 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114463 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114464 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114465 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114466 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114467 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114468 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114469 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114470 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114471 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114472 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114473 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114474 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114475 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114476 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114477 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114478 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114479 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114480 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114481 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114482 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114483 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114484 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114485 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114486 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114487 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114488 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114489 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114490 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114491 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114492 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114493 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114494 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114495 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114496 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114497 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114498 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114499 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114500 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114501 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114502 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114503 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114504 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114505 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114506 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114507 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114508 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114509 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114510 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114511 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114512 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114513 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114514 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114515 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114516 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114517 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114518 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114519 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114520 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114521 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114522 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114523 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114524 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114525 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114526 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114527 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114528 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114529 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114530 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114531 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114532 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114533 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114534 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114535 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114536 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114537 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114538 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114539 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114540 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114541 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114542 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114543 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114544 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114545 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114546 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114547 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114548 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114549 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114550 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114551 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114552 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114553 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114554 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114555 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114556 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114557 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114558 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114559 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114560 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114561 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114562 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114563 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114564 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114565 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114566 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114567 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114568 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114569 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114570 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114571 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114572 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114573 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114574 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114575 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114576 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114577 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114578 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114579 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114580 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114581 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114582 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114583 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114584 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114585 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114586 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114587 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114588 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114589 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114590 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114591 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114592 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114593 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114594 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114595 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114596 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114597 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114598 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114599 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114600 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114601 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114602 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114603 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114604 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114605 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114606 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114607 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114608 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114609 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114610 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114611 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114612 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114613 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114614 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114615 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114616 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114617 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114618 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114619 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114620 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114621 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114622 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114623 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114624 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114625 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114626 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114627 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114628 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114629 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114630 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114631 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114632 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114633 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114634 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114635 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114636 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114637 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114638 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114639 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114640 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114641 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114642 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114643 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114644 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114645 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114646 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114647 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114648 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114649 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114650 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114651 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114652 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114653 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114654 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114655 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114656 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114657 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114658 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114659 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114660 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114661 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114662 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114663 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114664 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114665 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114666 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114667 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114668 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114669 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114670 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114671 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114672 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114673 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114674 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114675 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114676 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114677 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114678 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114679 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114680 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114681 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114682 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114683 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114684 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114685 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114686 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114687 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114688 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114689 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114690 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114691 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114692 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114693 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114694 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114695 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114696 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114697 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114698 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114699 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114700 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114701 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114702 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114703 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114704 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114705 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114706 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114707 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114708 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114709 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114710 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114711 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114712 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114713 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114714 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114715 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114716 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114717 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114718 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114719 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114720 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114721 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114722 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114723 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114724 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114725 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114726 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114727 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114728 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114729 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114730 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114731 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114732 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114733 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114734 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114735 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114736 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114737 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114738 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114739 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114740 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114741 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114742 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114743 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114744 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114745 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114746 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114747 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114748 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114749 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114750 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114751 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114752 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114753 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114754 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114755 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114756 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114757 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114758 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114759 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114760 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114761 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114762 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114763 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114764 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114765 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114766 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114767 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114768 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114769 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114770 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114771 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114772 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114773 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114774 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114775 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114776 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114777 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114778 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114779 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114780 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114781 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114782 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114783 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114784 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114785 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114786 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114787 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114788 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114789 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114790 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114791 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114792 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114793 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114794 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114795 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114796 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114797 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114798 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114799 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114800 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114801 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114802 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114803 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114804 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114805 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114806 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114807 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			114808 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114809 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114810 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114811 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114812 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114813 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114814 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114815 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114816 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114817 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114818 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114819 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114820 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114821 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114822 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114823 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114824 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114825 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114826 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114827 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114828 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114829 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114830 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114831 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114832 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114833 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114834 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114835 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114836 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114837 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114838 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114839 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114840 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114841 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114842 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114843 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114844 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114845 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114846 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114847 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114848 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114849 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114850 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114851 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114852 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114853 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114854 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114855 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114856 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114857 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114858 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114859 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114860 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114861 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114862 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114863 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114864 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114865 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114866 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114867 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114868 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114869 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114870 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114871 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114872 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114873 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114874 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114875 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114876 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114877 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114878 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114879 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114880 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114881 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114882 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114883 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114884 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114885 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114886 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114887 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114888 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114889 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114890 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114891 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114892 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114893 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114894 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114895 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114896 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114897 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114898 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114899 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114900 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114901 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114902 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114903 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114904 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114905 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114906 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114907 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114908 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114909 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114910 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114911 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114912 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114913 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114914 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114915 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114916 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114917 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114918 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114919 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114920 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114921 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114922 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114923 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114924 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114925 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114926 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114927 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114928 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114929 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114930 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114931 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114932 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114933 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114934 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114935 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114936 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114937 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114938 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114939 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114940 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114941 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114942 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114943 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114944 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114945 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114946 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114947 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114948 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114949 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114950 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114951 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114952 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114953 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114954 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114955 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114956 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114957 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114958 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114959 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114960 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114961 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114962 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114963 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114964 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114965 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114966 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114967 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114968 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114969 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114970 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114971 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114972 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114973 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114974 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114975 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114976 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114977 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114978 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114979 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114980 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114981 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114982 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114983 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114984 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114985 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114986 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114987 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114988 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114989 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114990 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114991 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114992 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114993 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114994 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114995 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114996 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114997 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114998 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			114999 => [
				'validator'                => new NullableIsSubClassOfArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
