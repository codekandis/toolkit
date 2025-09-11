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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0094 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			94000 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94001 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94002 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94003 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94004 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94005 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94006 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94007 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94008 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94009 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94010 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94011 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94012 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94013 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94014 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94015 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94016 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94017 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94018 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94019 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94020 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94021 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94022 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94023 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94024 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94025 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94026 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94027 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94028 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94029 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94030 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94031 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94032 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94033 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94034 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94035 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94036 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94037 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94038 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94039 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94040 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94041 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94042 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94043 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94044 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94045 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94046 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94047 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94048 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94049 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94050 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94051 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94052 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94053 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94054 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94055 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94056 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94057 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94058 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94059 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94060 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94061 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94062 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94063 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94064 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94065 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94066 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94067 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94068 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94069 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94070 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94071 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94072 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94073 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94074 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94075 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94076 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94077 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94078 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94079 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94080 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94081 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94082 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94083 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94084 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94085 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94086 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94087 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94088 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94089 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94090 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94091 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94092 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94093 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94094 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94095 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94096 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94097 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94098 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94099 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94100 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94101 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94102 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94103 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94104 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94105 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94106 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94107 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94108 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94109 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94110 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94111 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94112 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94113 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94114 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94115 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94116 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94117 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94118 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94119 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94120 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94121 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94122 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94123 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94124 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94125 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94126 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94127 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94128 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94129 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94130 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94131 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94132 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94133 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94134 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94135 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94136 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94137 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94138 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94139 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94140 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94141 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94142 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94143 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94144 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94145 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94146 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94147 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94148 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94149 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94150 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94151 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94152 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94153 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94154 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94155 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94156 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94157 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94158 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94159 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94160 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94161 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94162 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94163 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94164 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94165 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94166 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94167 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94168 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94169 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94170 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94171 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94172 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94173 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94174 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94175 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94176 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94177 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94178 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94179 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94180 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94181 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94182 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94183 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94184 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94185 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94186 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94187 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94188 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94189 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94190 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94191 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94192 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94193 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94194 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94195 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94196 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94197 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94198 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94199 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94200 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94201 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94202 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94203 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94204 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94205 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94206 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94207 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94208 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94209 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94210 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94211 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94212 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94213 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94214 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94215 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94216 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94217 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94218 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94219 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94220 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94221 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94222 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94223 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94224 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94225 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94226 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94227 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94228 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94229 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94230 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94231 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94232 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94233 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94234 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94235 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94236 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94237 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94238 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94239 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94240 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94241 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94242 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94243 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94244 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94245 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94246 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94247 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94248 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94249 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94250 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94251 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94252 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94253 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94254 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94255 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94256 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94257 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94258 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94259 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94260 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94261 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94262 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94263 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94264 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94265 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94266 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94267 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94268 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94269 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94270 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94271 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94272 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94273 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94274 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94275 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94276 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94277 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94278 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94279 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94280 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94281 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94282 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94283 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94284 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94285 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94286 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94287 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94288 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94289 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94290 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94291 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94292 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94293 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94294 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94295 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94296 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94297 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94298 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94299 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94300 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94301 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94302 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94303 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94304 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94305 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94306 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94307 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94308 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94309 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94310 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94311 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94312 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94313 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94314 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94315 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94316 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94317 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94318 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94319 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94320 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94321 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94322 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94323 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94324 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94325 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94326 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94327 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94328 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94329 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94330 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94331 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94332 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94333 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94334 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94335 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94336 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94337 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94338 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94339 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94340 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94341 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94342 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94343 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94344 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94345 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94346 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94347 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94348 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94349 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94350 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94351 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94352 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94353 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94354 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94355 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94356 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94357 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94358 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94359 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94360 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94361 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94362 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94363 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94364 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94365 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94366 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94367 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94368 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94369 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94370 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94371 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94372 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94373 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94374 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94375 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94376 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94377 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94378 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94379 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94380 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94381 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94382 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94383 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94384 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94385 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94386 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94387 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94388 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94389 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94390 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94391 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94392 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94393 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94394 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94395 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94396 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94397 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94398 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94399 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94400 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94401 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94402 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94403 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94404 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94405 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94406 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94407 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94408 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94409 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94410 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94411 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94412 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94413 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94414 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94415 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94416 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94417 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94418 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94419 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94420 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94421 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94422 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94423 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94424 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94425 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94426 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94427 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94428 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94429 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94430 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94431 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94432 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94433 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94434 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94435 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94436 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94437 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94438 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94439 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94440 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94441 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94442 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94443 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94444 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94445 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94446 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94447 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94448 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94449 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94450 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94451 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94452 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94453 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94454 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94455 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94456 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94457 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94458 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94459 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94460 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94461 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94462 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94463 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94464 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94465 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94466 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94467 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94468 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94469 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94470 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94471 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94472 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94473 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94474 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94475 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94476 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94477 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94478 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94479 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94480 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94481 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94482 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94483 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94484 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94485 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94486 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94487 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94488 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94489 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94490 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94491 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94492 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94493 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94494 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94495 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94496 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94497 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94498 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94499 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94500 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94501 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94502 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94503 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94504 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94505 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94506 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94507 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94508 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94509 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94510 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94511 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94512 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94513 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94514 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94515 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94516 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94517 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94518 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94519 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94520 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94521 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94522 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94523 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94524 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94525 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94526 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94527 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94528 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94529 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94530 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94531 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94532 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94533 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94534 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94535 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94536 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94537 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94538 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94539 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94540 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94541 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94542 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94543 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94544 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94545 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94546 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94547 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94548 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94549 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94550 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94551 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94552 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94553 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94554 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94555 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94556 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94557 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94558 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94559 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94560 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94561 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94562 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94563 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94564 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94565 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94566 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94567 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94568 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94569 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94570 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94571 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94572 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94573 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94574 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94575 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94576 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94577 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94578 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94579 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94580 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94581 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94582 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94583 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94584 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94585 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94586 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94587 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94588 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94589 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94590 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94591 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94592 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94593 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94594 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94595 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94596 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94597 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94598 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94599 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94600 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94601 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94602 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94603 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94604 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94605 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94606 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94607 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94608 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94609 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94610 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94611 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94612 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94613 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94614 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94615 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94616 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94617 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94618 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94619 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94620 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94621 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94622 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94623 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94624 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94625 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94626 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94627 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94628 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94629 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94630 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94631 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94632 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94633 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94634 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94635 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94636 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94637 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94638 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94639 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94640 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94641 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94642 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94643 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94644 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94645 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94646 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94647 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94648 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94649 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94650 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94651 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94652 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94653 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94654 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94655 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94656 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94657 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94658 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94659 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94660 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94661 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94662 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94663 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94664 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94665 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94666 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94667 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94668 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94669 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94670 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94671 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94672 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94673 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94674 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94675 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94676 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94677 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94678 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94679 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94680 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94681 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94682 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94683 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94684 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94685 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94686 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94687 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94688 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94689 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94690 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94691 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94692 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94693 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94694 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94695 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94696 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94697 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94698 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94699 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94700 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94701 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94702 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94703 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94704 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94705 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94706 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94707 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94708 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94709 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94710 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94711 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94712 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94713 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94714 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94715 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94716 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94717 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94718 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94719 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94720 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94721 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94722 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94723 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94724 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94725 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94726 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94727 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94728 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94729 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94730 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94731 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94732 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94733 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94734 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94735 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94736 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94737 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94738 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94739 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94740 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94741 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94742 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94743 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94744 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94745 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94746 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94747 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94748 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94749 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94750 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94751 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94752 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94753 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94754 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94755 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94756 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94757 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94758 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94759 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94760 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94761 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94762 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94763 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94764 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94765 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94766 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94767 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94768 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94769 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94770 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94771 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94772 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94773 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94774 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94775 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94776 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94777 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94778 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94779 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94780 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94781 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94782 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94783 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94784 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94785 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94786 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94787 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94788 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94789 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94790 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94791 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94792 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94793 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94794 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94795 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94796 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94797 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94798 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94799 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94800 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94801 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94802 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94803 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94804 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94805 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94806 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94807 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94808 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94809 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94810 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94811 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94812 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94813 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94814 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94815 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94816 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94817 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94818 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94819 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94820 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94821 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94822 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94823 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94824 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94825 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94826 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94827 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94828 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94829 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94830 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94831 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94832 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94833 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94834 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94835 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94836 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94837 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94838 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94839 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94840 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94841 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94842 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94843 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94844 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94845 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94846 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94847 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94848 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94849 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94850 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94851 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94852 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94853 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94854 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94855 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94856 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94857 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94858 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94859 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94860 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94861 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94862 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94863 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94864 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94865 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94866 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94867 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94868 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94869 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94870 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94871 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94872 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94873 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94874 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94875 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94876 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94877 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94878 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94879 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94880 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94881 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94882 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94883 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94884 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94885 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94886 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94887 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94888 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94889 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94890 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94891 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94892 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94893 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94894 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94895 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94896 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94897 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94898 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94899 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94900 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94901 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94902 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94903 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94904 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94905 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94906 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94907 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94908 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94909 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94910 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94911 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94912 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94913 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94914 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94915 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94916 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94917 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94918 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94919 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94920 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94921 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94922 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94923 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94924 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94925 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94926 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94927 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94928 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94929 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94930 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94931 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94932 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94933 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94934 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94935 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94936 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94937 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94938 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94939 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94940 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94941 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94942 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94943 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94944 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94945 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94946 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94947 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94948 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94949 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94950 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94951 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94952 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94953 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94954 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94955 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94956 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94957 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94958 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94959 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94960 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94961 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94962 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94963 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94964 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94965 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94966 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94967 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94968 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94969 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94970 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94971 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94972 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94973 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94974 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94975 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94976 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94977 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94978 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94979 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94980 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94981 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94982 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94983 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94984 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94985 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94986 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94987 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94988 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94989 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94990 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94991 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94992 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94993 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94994 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94995 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94996 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94997 => [
				'validator'                => new NullableIsInClassConstantsArrayValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			94998 => [
				'validator'                => new NullableIsInClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			94999 => [
				'validator'                => new NullableIsInClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			]
		];
	}
}
