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
use CodeKandis\ToolKit\Validators\NullableIsSubClassOfValidator;
use CodeKandis\ToolKit\Validators\NullableIsTraitNameArrayValidator;
use CodeKandis\ToolKit\Validators\NullableIsTraitNameValidator;
use CodeKandis\ToolKit\Validators\NullableValidatorChain;
use CodeKandis\ToolKit\Validators\ValidatorChain;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedArrayValidator;
use CodeKandis\ToolKit\Validators\MappedValidators\MappedObjectValidator;

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0118 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			118000 => [
				'validator'                => new ValidatorChain(
...Values::createEmptyValidators()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118001 => [
				'validator'                => new ValidatorChain(
...Values::createEmptyValidators()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118002 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118003 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118004 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118005 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118006 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118007 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118008 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118009 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118010 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118011 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118012 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118013 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118014 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118015 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118016 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118017 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118018 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118019 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118020 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118021 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118022 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118023 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118024 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118025 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118026 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118027 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118028 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118029 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118030 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118031 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118032 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118033 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118034 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118035 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118036 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118037 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118038 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118039 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118040 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118041 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118042 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118043 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118044 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118045 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118046 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118047 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118048 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118049 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118050 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118051 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118052 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118053 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118054 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118055 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118056 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118057 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118058 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118059 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118060 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118061 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118062 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118063 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118064 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118065 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118066 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118067 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118068 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118069 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118070 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118071 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118072 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118073 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118074 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118075 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118076 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118077 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118078 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118079 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118080 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118081 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118082 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118083 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118084 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118085 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118086 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118087 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118088 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118089 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118090 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118091 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118092 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118093 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118094 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118095 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118096 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118097 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118098 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118099 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118100 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118101 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118102 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118103 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118104 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118105 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118106 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118107 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118108 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118109 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118110 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118111 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118112 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118113 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118114 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118115 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118116 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118117 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118118 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118119 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118120 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118121 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118122 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118123 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118124 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118125 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118126 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118127 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118128 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118129 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118130 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118131 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118132 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118133 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118134 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118135 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118136 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118137 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118138 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118139 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118140 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118141 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118142 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118143 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118144 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118145 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118146 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118147 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118148 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118149 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118150 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118151 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118152 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118153 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118154 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118155 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118156 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118157 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118158 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118159 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118160 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118161 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118162 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118163 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118164 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118165 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118166 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118167 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118168 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118169 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118170 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118171 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118172 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118173 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118174 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118175 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118176 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118177 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118178 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118179 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118180 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118181 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118182 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118183 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118184 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118185 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118186 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118187 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118188 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118189 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118190 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118191 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118192 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118193 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118194 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118195 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118196 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118197 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118198 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118199 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118200 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118201 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118202 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118203 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118204 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118205 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118206 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118207 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118208 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118209 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118210 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118211 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118212 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118213 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118214 => [
				'validator'                => new ValidatorChain(
...Values::createValidators()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118215 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118216 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118217 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118218 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118219 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118220 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118221 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118222 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118223 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118224 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118225 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118226 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118227 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118228 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118229 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118230 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118231 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118232 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118233 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118234 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118235 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118236 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118237 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118238 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118239 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118240 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118241 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118242 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118243 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118244 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118245 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118246 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118247 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118248 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118249 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118250 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118251 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118252 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118253 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118254 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118255 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118256 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118257 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118258 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118259 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118260 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118261 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118262 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118263 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118264 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118265 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118266 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118267 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118268 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118269 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118270 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118271 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118272 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118273 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118274 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118275 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118276 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118277 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118278 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118279 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118280 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118281 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118282 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118283 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118284 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118285 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118286 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118287 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118288 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118289 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118290 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118291 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118292 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118293 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118294 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118295 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118296 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118297 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118298 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118299 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118300 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118301 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118302 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118303 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118304 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118305 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118306 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118307 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118308 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118309 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118310 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118311 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118312 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118313 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118314 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118315 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118316 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118317 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118318 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118319 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118320 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118321 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118322 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118323 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118324 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118325 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118326 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118327 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118328 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118329 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118330 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118331 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118332 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118333 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118334 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118335 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118336 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118337 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118338 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118339 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118340 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118341 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118342 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118343 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118344 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118345 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118346 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118347 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118348 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118349 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118350 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118351 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118352 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118353 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118354 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118355 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118356 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118357 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118358 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118359 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118360 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118361 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118362 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118363 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118364 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118365 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118366 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118367 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118368 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118369 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118370 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118371 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118372 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118373 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118374 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118375 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118376 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118377 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118378 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118379 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118380 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118381 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118382 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118383 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118384 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118385 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118386 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118387 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118388 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118389 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118390 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118391 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118392 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118393 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118394 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118395 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118396 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118397 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118398 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118399 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118400 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118401 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118402 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118403 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118404 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118405 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118406 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118407 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118408 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118409 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118410 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118411 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118412 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118413 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118414 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118415 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118416 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118417 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118418 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118419 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118420 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118421 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118422 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118423 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118424 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118425 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118426 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118427 => [
				'validator'                => new MappedArrayValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118428 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118429 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118430 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118431 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118432 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118433 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118434 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118435 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118436 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118437 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118438 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118439 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118440 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118441 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118442 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118443 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118444 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118445 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118446 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118447 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118448 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118449 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118450 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118451 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118452 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118453 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118454 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118455 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118456 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118457 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118458 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118459 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118460 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118461 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118462 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118463 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118464 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118465 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118466 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118467 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118468 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118469 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118470 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118471 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118472 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118473 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118474 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118475 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118476 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118477 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118478 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118479 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118480 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118481 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118482 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118483 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118484 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118485 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118486 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118487 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118488 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118489 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118490 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118491 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118492 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118493 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118494 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118495 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118496 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118497 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118498 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118499 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118500 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118501 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118502 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118503 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118504 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118505 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118506 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118507 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118508 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118509 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118510 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118511 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118512 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118513 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118514 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118515 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118516 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118517 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118518 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118519 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118520 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118521 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118522 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118523 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118524 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118525 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118526 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118527 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118528 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118529 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118530 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118531 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118532 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118533 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118534 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118535 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118536 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118537 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118538 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118539 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118540 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118541 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118542 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118543 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118544 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118545 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118546 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118547 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118548 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118549 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118550 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118551 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118552 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118553 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118554 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118555 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118556 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118557 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118558 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118559 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118560 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118561 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118562 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118563 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118564 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118565 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118566 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118567 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118568 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118569 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118570 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118571 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118572 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118573 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118574 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118575 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118576 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118577 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118578 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118579 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118580 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118581 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118582 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118583 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118584 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118585 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118586 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118587 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118588 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118589 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118590 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118591 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118592 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118593 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118594 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118595 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118596 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118597 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118598 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118599 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118600 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118601 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118602 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118603 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118604 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118605 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118606 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118607 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118608 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118609 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118610 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118611 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118612 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118613 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118614 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118615 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118616 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118617 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118618 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118619 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118620 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118621 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118622 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118623 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118624 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118625 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118626 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118627 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118628 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118629 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118630 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118631 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118632 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118633 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118634 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118635 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118636 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118637 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118638 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118639 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118640 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappings()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118641 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118642 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118643 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118644 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118645 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118646 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118647 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118648 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118649 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118650 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118651 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118652 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118653 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118654 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118655 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118656 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118657 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118658 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118659 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118660 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118661 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118662 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118663 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118664 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118665 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118666 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118667 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118668 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118669 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118670 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118671 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118672 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118673 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118674 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118675 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118676 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118677 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118678 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118679 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118680 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118681 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118682 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118683 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118684 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118685 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118686 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118687 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118688 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118689 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118690 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118691 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118692 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118693 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118694 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118695 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118696 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118697 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118698 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118699 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118700 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118701 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118702 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118703 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118704 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118705 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118706 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118707 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118708 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118709 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118710 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118711 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118712 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118713 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118714 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118715 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118716 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118717 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118718 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118719 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118720 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118721 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118722 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118723 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118724 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118725 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118726 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118727 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118728 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118729 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118730 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118731 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118732 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118733 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118734 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118735 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118736 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118737 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118738 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118739 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118740 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118741 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118742 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118743 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118744 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118745 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118746 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118747 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118748 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118749 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118750 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118751 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118752 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118753 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118754 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118755 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118756 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118757 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118758 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118759 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118760 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118761 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118762 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118763 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118764 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118765 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118766 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118767 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118768 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118769 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118770 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118771 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118772 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118773 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118774 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118775 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118776 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118777 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118778 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118779 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118780 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118781 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118782 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118783 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118784 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118785 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118786 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118787 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118788 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118789 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118790 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118791 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118792 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118793 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118794 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118795 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118796 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118797 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118798 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118799 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118800 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118801 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118802 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118803 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118804 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118805 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118806 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118807 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118808 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118809 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118810 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118811 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118812 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118813 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118814 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118815 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118816 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118817 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118818 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118819 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118820 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118821 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118822 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118823 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118824 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118825 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118826 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118827 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118828 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118829 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118830 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118831 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118832 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118833 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118834 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118835 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118836 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118837 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118838 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118839 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118840 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118841 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118842 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118843 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118844 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118845 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118846 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118847 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118848 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118849 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118850 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118851 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118852 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118853 => [
				'validator'                => new MappedArrayValidator(
...Values::createValidatorMappingsWithUnknownKey()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118854 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118855 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118856 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118857 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118858 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118859 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118860 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118861 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118862 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118863 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118864 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118865 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118866 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118867 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118868 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118869 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118870 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118871 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118872 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118873 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118874 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118875 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118876 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118877 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118878 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118879 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118880 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118881 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118882 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118883 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118884 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118885 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118886 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118887 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118888 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118889 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118890 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118891 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118892 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118893 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118894 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118895 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118896 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118897 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118898 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118899 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118900 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118901 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118902 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118903 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118904 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118905 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118906 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118907 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118908 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118909 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118910 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118911 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118912 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118913 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118914 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118915 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118916 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118917 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118918 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118919 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118920 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118921 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118922 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118923 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118924 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118925 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118926 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118927 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118928 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118929 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118930 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118931 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118932 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118933 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118934 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118935 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118936 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118937 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118938 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118939 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118940 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118941 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118942 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118943 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118944 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118945 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118946 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118947 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118948 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118949 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118950 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118951 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118952 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118953 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118954 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118955 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118956 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118957 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118958 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118959 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118960 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118961 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118962 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118963 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118964 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			118965 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118966 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118967 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118968 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118969 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118970 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118971 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118972 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118973 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118974 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118975 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118976 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118977 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118978 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118979 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118980 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118981 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118982 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118983 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118984 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118985 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118986 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118987 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118988 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118989 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118990 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118991 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118992 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118993 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118994 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118995 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118996 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118997 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118998 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			118999 => [
				'validator'                => new MappedObjectValidator(
...Values::createEmptyValidatorMappings()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
