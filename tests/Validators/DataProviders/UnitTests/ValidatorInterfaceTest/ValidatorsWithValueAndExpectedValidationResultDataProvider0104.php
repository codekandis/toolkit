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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0104 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			104000 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104001 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104002 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104003 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104004 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104005 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104006 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104007 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104008 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104009 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104010 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104011 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104012 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104013 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104014 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104015 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104016 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104017 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104018 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104019 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104020 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104021 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104022 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104023 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104024 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104025 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104026 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104027 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104028 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104029 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			104030 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104031 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104032 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104033 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104034 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104035 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104036 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104037 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104038 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104039 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104040 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104041 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104042 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104043 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104044 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104045 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104046 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104047 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104048 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104049 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104050 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104051 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104052 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104053 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104054 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104055 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104056 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104057 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104058 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104059 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104060 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104061 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104062 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104063 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104064 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104065 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104066 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104067 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104068 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104069 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104070 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104071 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104072 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104073 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104074 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104075 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104076 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104077 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104078 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104079 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104080 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104081 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104082 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104083 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104084 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104085 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104086 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104087 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104088 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104089 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104090 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104091 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104092 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104093 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104094 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104095 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104096 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104097 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104098 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104099 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104100 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104101 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104102 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104103 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104104 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104105 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104106 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104107 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104108 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104109 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104110 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104111 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104112 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104113 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104114 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104115 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104116 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104117 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104118 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104119 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104120 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104121 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104122 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104123 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104124 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104125 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104126 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104127 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104128 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104129 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104130 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104131 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104132 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104133 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104134 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104135 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104136 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104137 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104138 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104139 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104140 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104141 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104142 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104143 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104144 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104145 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104146 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104147 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104148 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104149 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104150 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104151 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104152 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104153 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104154 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104155 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104156 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104157 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			104158 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104159 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104160 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104161 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104162 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104163 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104164 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104165 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104166 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104167 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104168 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104169 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104170 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104171 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104172 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104173 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104174 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104175 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104176 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104177 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104178 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104179 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104180 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104181 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104182 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104183 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104184 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104185 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104186 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104187 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104188 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104189 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104190 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104191 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104192 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104193 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104194 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104195 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104196 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104197 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104198 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104199 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104200 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104201 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104202 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104203 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104204 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104205 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104206 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104207 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104208 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104209 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104210 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104211 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104212 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104213 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104214 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104215 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104216 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104217 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104218 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104219 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104220 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104221 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104222 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104223 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104224 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104225 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104226 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104227 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104228 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104229 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104230 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104231 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104232 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104233 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104234 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104235 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104236 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104237 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104238 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104239 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104240 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104241 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104242 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104243 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			104244 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104245 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104246 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104247 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104248 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104249 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104250 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104251 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104252 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104253 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104254 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104255 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104256 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104257 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104258 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104259 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104260 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104261 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104262 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104263 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104264 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104265 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104266 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104267 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104268 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104269 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104270 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104271 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104272 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104273 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104274 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104275 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104276 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104277 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104278 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104279 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104280 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104281 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104282 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104283 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104284 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104285 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104286 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104287 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104288 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104289 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104290 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104291 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104292 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104293 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104294 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104295 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104296 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104297 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104298 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104299 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104300 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104301 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104302 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104303 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104304 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104305 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104306 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104307 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104308 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104309 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104310 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104311 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104312 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104313 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104314 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104315 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104316 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104317 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104318 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104319 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104320 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104321 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104322 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104323 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104324 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104325 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104326 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104327 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104328 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104329 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104330 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104331 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104332 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104333 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104334 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104335 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104336 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104337 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104338 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104339 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104340 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104341 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104342 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104343 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104344 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104345 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104346 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104347 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104348 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104349 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104350 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104351 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104352 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104353 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104354 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104355 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104356 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104357 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104358 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104359 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104360 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104361 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104362 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104363 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104364 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104365 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104366 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104367 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104368 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104369 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104370 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			104371 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104372 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104373 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104374 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104375 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104376 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104377 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104378 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104379 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104380 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104381 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104382 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104383 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104384 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104385 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104386 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104387 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104388 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104389 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104390 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104391 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104392 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104393 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104394 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104395 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104396 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104397 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104398 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104399 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104400 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104401 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104402 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104403 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104404 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104405 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104406 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104407 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104408 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104409 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104410 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104411 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104412 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104413 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104414 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104415 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104416 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104417 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104418 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104419 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104420 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104421 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104422 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104423 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104424 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104425 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104426 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104427 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104428 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104429 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104430 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104431 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104432 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104433 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104434 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104435 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104436 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104437 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104438 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104439 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104440 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104441 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104442 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104443 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104444 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104445 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104446 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104447 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104448 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104449 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104450 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104451 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104452 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104453 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104454 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104455 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104456 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104457 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104458 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104459 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104460 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104461 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104462 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104463 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104464 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104465 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104466 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104467 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			104468 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104469 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104470 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104471 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104472 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104473 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104474 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104475 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104476 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104477 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104478 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104479 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104480 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104481 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104482 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104483 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104484 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104485 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104486 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104487 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104488 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104489 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104490 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104491 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104492 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104493 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104494 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104495 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104496 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104497 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104498 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104499 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104500 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104501 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104502 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104503 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104504 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104505 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104506 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104507 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104508 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104509 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104510 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104511 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104512 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104513 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104514 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104515 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104516 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104517 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104518 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104519 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104520 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104521 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104522 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104523 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104524 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104525 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104526 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104527 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104528 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104529 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104530 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104531 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104532 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104533 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104534 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104535 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104536 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104537 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104538 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104539 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104540 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104541 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104542 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104543 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104544 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104545 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104546 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104547 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104548 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104549 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104550 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104551 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104552 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104553 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104554 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104555 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104556 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104557 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104558 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104559 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104560 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104561 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104562 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104563 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104564 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104565 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104566 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104567 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104568 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104569 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104570 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104571 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104572 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104573 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104574 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104575 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104576 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104577 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104578 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104579 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104580 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104581 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104582 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104583 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			104584 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104585 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104586 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104587 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104588 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104589 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104590 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104591 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104592 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104593 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104594 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104595 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104596 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104597 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104598 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104599 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104600 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104601 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104602 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104603 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104604 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104605 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104606 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104607 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104608 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104609 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104610 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104611 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104612 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104613 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104614 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104615 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104616 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104617 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104618 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104619 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104620 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104621 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104622 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104623 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104624 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104625 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104626 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104627 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104628 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104629 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104630 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104631 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104632 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104633 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104634 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104635 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104636 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104637 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104638 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104639 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104640 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104641 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104642 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104643 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104644 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104645 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104646 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104647 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104648 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104649 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104650 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104651 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104652 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104653 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104654 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104655 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104656 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104657 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104658 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104659 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104660 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104661 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104662 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104663 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104664 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104665 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104666 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104667 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104668 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104669 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104670 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104671 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104672 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104673 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104674 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104675 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104676 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104677 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104678 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104679 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104680 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104681 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			104682 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104683 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104684 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104685 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104686 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104687 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104688 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104689 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104690 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104691 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104692 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104693 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104694 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104695 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104696 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104697 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104698 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104699 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104700 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104701 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104702 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104703 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104704 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104705 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104706 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104707 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104708 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104709 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104710 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104711 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104712 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104713 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104714 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104715 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104716 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104717 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104718 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104719 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104720 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104721 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104722 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104723 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104724 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104725 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104726 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104727 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104728 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104729 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104730 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104731 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104732 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104733 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104734 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104735 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104736 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104737 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104738 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104739 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104740 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104741 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104742 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104743 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104744 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104745 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104746 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104747 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104748 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104749 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104750 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104751 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104752 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104753 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104754 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104755 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104756 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104757 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104758 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104759 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104760 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104761 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104762 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104763 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104764 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104765 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104766 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104767 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104768 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104769 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104770 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104771 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104772 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104773 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104774 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104775 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104776 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104777 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104778 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104779 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104780 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104781 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104782 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104783 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104784 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104785 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104786 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104787 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104788 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104789 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104790 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104791 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104792 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104793 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104794 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104795 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104796 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			104797 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104798 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104799 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104800 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104801 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104802 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104803 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104804 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104805 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104806 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104807 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104808 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104809 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104810 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104811 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104812 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104813 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104814 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104815 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104816 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104817 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104818 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104819 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104820 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104821 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104822 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104823 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104824 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104825 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104826 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104827 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104828 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104829 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104830 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104831 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104832 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104833 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104834 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104835 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104836 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104837 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104838 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104839 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104840 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104841 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104842 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104843 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104844 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104845 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104846 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104847 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104848 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104849 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104850 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104851 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104852 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104853 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104854 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104855 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104856 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104857 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104858 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104859 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104860 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104861 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104862 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104863 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104864 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104865 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104866 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104867 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104868 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104869 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104870 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104871 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104872 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104873 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104874 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104875 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104876 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104877 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104878 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104879 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104880 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104881 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104882 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104883 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104884 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104885 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104886 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104887 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104888 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104889 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104890 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104891 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104892 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104893 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104894 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104895 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104896 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104897 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104898 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104899 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104900 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104901 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104902 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104903 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104904 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104905 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			104906 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104907 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104908 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104909 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104910 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104911 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104912 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104913 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104914 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104915 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104916 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104917 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104918 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104919 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104920 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104921 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104922 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104923 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104924 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104925 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104926 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104927 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104928 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104929 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104930 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104931 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104932 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104933 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104934 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104935 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104936 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104937 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104938 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104939 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104940 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104941 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104942 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104943 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104944 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104945 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104946 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104947 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104948 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104949 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104950 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104951 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104952 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104953 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104954 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104955 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104956 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104957 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104958 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104959 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104960 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104961 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104962 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104963 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104964 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104965 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104966 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104967 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104968 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104969 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104970 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104971 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104972 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104973 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104974 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104975 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104976 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104977 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104978 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104979 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104980 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104981 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104982 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104983 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104984 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104985 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104986 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104987 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104988 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104989 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104990 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104991 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104992 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104993 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104994 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104995 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104996 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104997 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104998 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			104999 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
