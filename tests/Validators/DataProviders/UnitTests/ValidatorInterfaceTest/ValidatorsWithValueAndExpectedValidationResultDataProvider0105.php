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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0105 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			105000 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105001 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105002 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105003 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105004 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105005 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105006 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105007 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105008 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105009 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105010 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105011 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105012 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105013 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105014 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105015 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105016 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105017 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105018 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105019 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105020 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105021 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105022 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105023 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105024 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105025 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105026 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105027 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105028 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105029 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105030 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105031 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105032 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105033 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105034 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105035 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105036 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105037 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105038 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105039 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105040 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105041 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105042 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105043 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105044 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105045 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105046 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105047 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105048 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105049 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105050 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105051 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105052 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105053 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105054 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105055 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105056 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105057 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105058 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105059 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105060 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105061 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105062 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105063 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105064 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105065 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105066 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105067 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105068 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105069 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105070 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105071 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105072 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105073 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105074 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105075 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105076 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105077 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105078 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105079 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105080 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105081 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105082 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105083 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105084 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105085 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105086 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105087 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105088 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105089 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105090 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105091 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105092 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105093 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105094 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105095 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105096 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105097 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105098 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105099 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105100 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105101 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105102 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105103 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105104 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105105 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105106 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105107 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105108 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105109 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105110 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105111 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105112 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105113 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105114 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105115 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105116 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105117 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105118 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105119 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105120 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105121 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105122 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105123 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105124 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105125 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105126 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105127 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105128 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105129 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105130 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105131 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105132 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105133 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105134 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105135 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105136 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105137 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105138 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105139 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105140 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105141 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105142 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105143 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105144 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105145 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105146 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105147 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105148 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105149 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105150 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105151 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105152 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105153 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105154 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105155 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105156 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105157 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105158 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105159 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105160 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105161 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105162 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105163 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105164 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105165 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105166 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105167 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105168 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105169 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105170 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105171 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105172 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105173 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105174 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105175 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105176 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105177 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105178 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105179 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105180 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105181 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105182 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105183 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105184 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105185 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105186 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105187 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105188 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105189 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105190 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105191 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105192 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105193 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105194 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105195 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105196 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105197 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105198 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105199 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105200 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105201 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105202 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105203 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105204 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105205 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105206 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105207 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105208 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105209 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105210 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105211 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105212 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105213 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105214 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105215 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105216 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105217 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105218 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105219 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105220 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105221 => [
				'validator'                => new NullableIsInstanceOfValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105222 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105223 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105224 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105225 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105226 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105227 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105228 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105229 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105230 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105231 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105232 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105233 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105234 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105235 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105236 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105237 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105238 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105239 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105240 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105241 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105242 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105243 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105244 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105245 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105246 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105247 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105248 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105249 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105250 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105251 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105252 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105253 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105254 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105255 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105256 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105257 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105258 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105259 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105260 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105261 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105262 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105263 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105264 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105265 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105266 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105267 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105268 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105269 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105270 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105271 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105272 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105273 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105274 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105275 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105276 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105277 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105278 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105279 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105280 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105281 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105282 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105283 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105284 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105285 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105286 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105287 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105288 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105289 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105290 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105291 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105292 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105293 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105294 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105295 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105296 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105297 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105298 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105299 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105300 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105301 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105302 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105303 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105304 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105305 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105306 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105307 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105308 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105309 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105310 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105311 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105312 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105313 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105314 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105315 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105316 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105317 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105318 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105319 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105320 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105321 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105322 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105323 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105324 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105325 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105326 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105327 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105328 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105329 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105330 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105331 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105332 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105333 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105334 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105335 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105336 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105337 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105338 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105339 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105340 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105341 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105342 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105343 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105344 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105345 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105346 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105347 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105348 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105349 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105350 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105351 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105352 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105353 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105354 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105355 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105356 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105357 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105358 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105359 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105360 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105361 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105362 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105363 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105364 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105365 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105366 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105367 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105368 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105369 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105370 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105371 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105372 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105373 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105374 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105375 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105376 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105377 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105378 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105379 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105380 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105381 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105382 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105383 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105384 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105385 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105386 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105387 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105388 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105389 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105390 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105391 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105392 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105393 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105394 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105395 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105396 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105397 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105398 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105399 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105400 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105401 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105402 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105403 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105404 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105405 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105406 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105407 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105408 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105409 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105410 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105411 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105412 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105413 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105414 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105415 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105416 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105417 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105418 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105419 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105420 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105421 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105422 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105423 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105424 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105425 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105426 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105427 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105428 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105429 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105430 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105431 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105432 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105433 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105434 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105435 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105436 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105437 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105438 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105439 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105440 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105441 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105442 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105443 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105444 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105445 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105446 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105447 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105448 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105449 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105450 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105451 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105452 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105453 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105454 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105455 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105456 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105457 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105458 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105459 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105460 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105461 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105462 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105463 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105464 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105465 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105466 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105467 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105468 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105469 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105470 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105471 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105472 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105473 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105474 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105475 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105476 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105477 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105478 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105479 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105480 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105481 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105482 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105483 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105484 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105485 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105486 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105487 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105488 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105489 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105490 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105491 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105492 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105493 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105494 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105495 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105496 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105497 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105498 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105499 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105500 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105501 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105502 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105503 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105504 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105505 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105506 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105507 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105508 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105509 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105510 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105511 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105512 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105513 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105514 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105515 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105516 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105517 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105518 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105519 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105520 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105521 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105522 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105523 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105524 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105525 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105526 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105527 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105528 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105529 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105530 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105531 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105532 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105533 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105534 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105535 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105536 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105537 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105538 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105539 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105540 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105541 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105542 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105543 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105544 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105545 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105546 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105547 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105548 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105549 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105550 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105551 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105552 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105553 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105554 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105555 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105556 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105557 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105558 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105559 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105560 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105561 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105562 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105563 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105564 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105565 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105566 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105567 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105568 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105569 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105570 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105571 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105572 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105573 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105574 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105575 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105576 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105577 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105578 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105579 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105580 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105581 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105582 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105583 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105584 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105585 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105586 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105587 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105588 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105589 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105590 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105591 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105592 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105593 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105594 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105595 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105596 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105597 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105598 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105599 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105600 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105601 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105602 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105603 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105604 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105605 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105606 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105607 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105608 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105609 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105610 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105611 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105612 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105613 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105614 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105615 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105616 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105617 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105618 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105619 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105620 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105621 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105622 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105623 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105624 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105625 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105626 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105627 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105628 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105629 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105630 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105631 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105632 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105633 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105634 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105635 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105636 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105637 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105638 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105639 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105640 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105641 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105642 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105643 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105644 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105645 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105646 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105647 => [
				'validator'                => new NullableIsInStringBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105648 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105649 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105650 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105651 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105652 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105653 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105654 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105655 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105656 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105657 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105658 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105659 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105660 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105661 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105662 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105663 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105664 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105665 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105666 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105667 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105668 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105669 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105670 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105671 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105672 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105673 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105674 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105675 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105676 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105677 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105678 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105679 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105680 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105681 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105682 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105683 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105684 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105685 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105686 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105687 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105688 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105689 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105690 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105691 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105692 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105693 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105694 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105695 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105696 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105697 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105698 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105699 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105700 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105701 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105702 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105703 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105704 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105705 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105706 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105707 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105708 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105709 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105710 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105711 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105712 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105713 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105714 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105715 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105716 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105717 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105718 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105719 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105720 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105721 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105722 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105723 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105724 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105725 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105726 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105727 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105728 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105729 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105730 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105731 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105732 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105733 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105734 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105735 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105736 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105737 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105738 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105739 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105740 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105741 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105742 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105743 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105744 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105745 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105746 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105747 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105748 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105749 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105750 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105751 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105752 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105753 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105754 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105755 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105756 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105757 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105758 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105759 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105760 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105761 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105762 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105763 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105764 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105765 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105766 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105767 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105768 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105769 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105770 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105771 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105772 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105773 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105774 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105775 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105776 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105777 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105778 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105779 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105780 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105781 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105782 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105783 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105784 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105785 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105786 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105787 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105788 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105789 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105790 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105791 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105792 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105793 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105794 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105795 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105796 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105797 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105798 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105799 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105800 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105801 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105802 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105803 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105804 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105805 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105806 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105807 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105808 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105809 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105810 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105811 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105812 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105813 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105814 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105815 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105816 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105817 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105818 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105819 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105820 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105821 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105822 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105823 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105824 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105825 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105826 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105827 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105828 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105829 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105830 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105831 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105832 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105833 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105834 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105835 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105836 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105837 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105838 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105839 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105840 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105841 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105842 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105843 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105844 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105845 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105846 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105847 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105848 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105849 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105850 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105851 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105852 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105853 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105854 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105855 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105856 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105857 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105858 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105859 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105860 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105861 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105862 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105863 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105864 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105865 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105866 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105867 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105868 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105869 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105870 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105871 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105872 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105873 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105874 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105875 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105876 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105877 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105878 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105879 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105880 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105881 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105882 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105883 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105884 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105885 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105886 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105887 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105888 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105889 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105890 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105891 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105892 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105893 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105894 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105895 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105896 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105897 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105898 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105899 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105900 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105901 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105902 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105903 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			105904 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105905 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105906 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105907 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105908 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105909 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105910 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105911 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105912 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105913 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105914 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105915 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105916 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105917 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105918 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105919 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105920 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105921 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105922 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105923 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105924 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105925 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105926 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105927 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105928 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105929 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105930 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105931 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105932 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105933 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105934 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105935 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105936 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105937 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105938 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105939 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105940 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105941 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105942 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105943 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105944 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105945 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105946 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105947 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105948 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105949 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105950 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105951 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105952 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105953 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105954 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105955 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105956 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105957 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105958 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105959 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105960 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105961 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105962 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105963 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105964 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105965 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105966 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105967 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105968 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105969 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105970 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105971 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105972 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105973 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105974 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105975 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105976 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105977 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105978 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105979 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105980 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105981 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105982 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105983 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105984 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105985 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105986 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105987 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105988 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105989 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105990 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105991 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105992 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105993 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105994 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105995 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105996 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105997 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105998 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			105999 => [
				'validator'                => new NullableIsInStringBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
