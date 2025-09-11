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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0092 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			92000 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92001 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92002 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92003 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92004 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92005 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92006 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92007 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92008 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92009 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92010 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92011 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92012 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92013 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92014 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92015 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createDateIntervalObjectMixedArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92016 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92017 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92018 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92019 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92020 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92021 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92022 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92023 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92024 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92025 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92026 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92027 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92028 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92029 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92030 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92031 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92032 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92033 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92034 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92035 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92036 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92037 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92038 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92039 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92040 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92041 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92042 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92043 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92044 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92045 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92046 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92047 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92048 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92049 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92050 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92051 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92052 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92053 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92054 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92055 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92056 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92057 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92058 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92059 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92060 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92061 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92062 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92063 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92064 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92065 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92066 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92067 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92068 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92069 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92070 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92071 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92072 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92073 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92074 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92075 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92076 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92077 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92078 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92079 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92080 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92081 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92082 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92083 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92084 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92085 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92086 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92087 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92088 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92089 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92090 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92091 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92092 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92093 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92094 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92095 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92096 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92097 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92098 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92099 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92100 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92101 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92102 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92103 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92104 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92105 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92106 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92107 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92108 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92109 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92110 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92111 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92112 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92113 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92114 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92115 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92116 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92117 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92118 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92119 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92120 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92121 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92122 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92123 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92124 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92125 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92126 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92127 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92128 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92129 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92130 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92131 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92132 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92133 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92134 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92135 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92136 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92137 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92138 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92139 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92140 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92141 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92142 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92143 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92144 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92145 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92146 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92147 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92148 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92149 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92150 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92151 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92152 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92153 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92154 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92155 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92156 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92157 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92158 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92159 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92160 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92161 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92162 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92163 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92164 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92165 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92166 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92167 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92168 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92169 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92170 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92171 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92172 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92173 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92174 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92175 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92176 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92177 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92178 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92179 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92180 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92181 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92182 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92183 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92184 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92185 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92186 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92187 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92188 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92189 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92190 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92191 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92192 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92193 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92194 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92195 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92196 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92197 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92198 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92199 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92200 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92201 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92202 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92203 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92204 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92205 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92206 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92207 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92208 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92209 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92210 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92211 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92212 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92213 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92214 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92215 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92216 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92217 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92218 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92219 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92220 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92221 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92222 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92223 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92224 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92225 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92226 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92227 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92228 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray1()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92229 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92230 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92231 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92232 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92233 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92234 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92235 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92236 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92237 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92238 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92239 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92240 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92241 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92242 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92243 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92244 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92245 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92246 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92247 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92248 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92249 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92250 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92251 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92252 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92253 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92254 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92255 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92256 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92257 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92258 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92259 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92260 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92261 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92262 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92263 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92264 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92265 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92266 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92267 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92268 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92269 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92270 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92271 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92272 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92273 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92274 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92275 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92276 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92277 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92278 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92279 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92280 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92281 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92282 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92283 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92284 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92285 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92286 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92287 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92288 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92289 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92290 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92291 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92292 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92293 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92294 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92295 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92296 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92297 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92298 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92299 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92300 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92301 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92302 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92303 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92304 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92305 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92306 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92307 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92308 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92309 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92310 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92311 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92312 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92313 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92314 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92315 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92316 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92317 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92318 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92319 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92320 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92321 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92322 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92323 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92324 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92325 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92326 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92327 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92328 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92329 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92330 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92331 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92332 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92333 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92334 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92335 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92336 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92337 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92338 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92339 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92340 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92341 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92342 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92343 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92344 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92345 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92346 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92347 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92348 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92349 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92350 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92351 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92352 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92353 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92354 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92355 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92356 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92357 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92358 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92359 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92360 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92361 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92362 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92363 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92364 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92365 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92366 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92367 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92368 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92369 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92370 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92371 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92372 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92373 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92374 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92375 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92376 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92377 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92378 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92379 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92380 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92381 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92382 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92383 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92384 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92385 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92386 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92387 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92388 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92389 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92390 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92391 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92392 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92393 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92394 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92395 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92396 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92397 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92398 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92399 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92400 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92401 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92402 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92403 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92404 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92405 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92406 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92407 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92408 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92409 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92410 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92411 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92412 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92413 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92414 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92415 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92416 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92417 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92418 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92419 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92420 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92421 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92422 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92423 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92424 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92425 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92426 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92427 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92428 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92429 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92430 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92431 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92432 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92433 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92434 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92435 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92436 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92437 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92438 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92439 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92440 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92441 => [
				'validator'                => new NullableIsInArrayValidator(
Values::createMixedValuesArray2()
),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92442 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92443 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92444 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92445 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92446 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92447 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92448 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92449 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92450 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92451 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92452 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92453 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92454 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92455 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92456 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92457 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92458 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92459 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92460 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92461 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92462 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92463 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92464 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92465 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92466 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92467 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92468 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92469 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92470 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92471 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92472 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92473 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92474 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92475 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92476 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92477 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92478 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92479 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92480 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92481 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92482 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92483 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92484 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92485 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92486 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92487 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92488 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92489 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92490 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92491 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92492 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92493 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92494 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92495 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92496 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92497 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92498 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92499 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92500 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92501 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92502 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92503 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92504 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92505 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92506 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92507 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92508 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92509 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92510 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92511 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92512 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92513 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92514 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92515 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92516 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92517 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92518 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92519 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92520 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92521 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92522 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92523 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92524 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92525 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92526 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92527 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92528 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92529 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92530 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92531 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92532 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92533 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92534 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92535 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92536 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92537 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92538 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92539 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92540 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92541 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92542 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92543 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92544 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92545 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92546 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92547 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92548 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92549 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92550 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92551 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92552 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92553 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92554 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92555 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92556 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92557 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92558 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92559 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92560 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92561 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92562 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92563 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92564 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92565 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92566 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92567 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92568 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92569 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92570 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92571 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92572 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92573 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92574 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92575 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92576 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92577 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92578 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92579 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92580 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92581 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92582 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92583 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92584 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92585 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92586 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92587 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92588 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92589 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92590 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92591 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92592 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92593 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92594 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92595 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92596 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92597 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92598 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92599 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92600 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92601 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92602 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92603 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92604 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92605 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92606 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92607 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92608 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92609 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92610 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92611 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92612 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92613 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92614 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92615 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92616 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92617 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92618 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92619 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92620 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92621 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92622 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92623 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92624 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92625 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92626 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92627 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92628 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92629 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92630 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92631 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92632 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92633 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92634 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92635 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92636 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92637 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92638 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92639 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92640 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92641 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92642 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92643 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92644 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92645 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92646 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92647 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92648 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92649 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92650 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92651 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92652 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92653 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92654 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92655 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92656 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92657 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92658 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92659 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92660 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92661 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92662 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92663 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92664 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92665 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92666 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92667 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92668 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92669 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92670 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92671 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92672 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92673 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92674 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92675 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92676 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92677 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92678 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92679 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92680 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92681 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92682 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92683 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92684 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92685 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92686 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92687 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92688 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92689 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92690 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92691 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92692 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92693 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92694 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92695 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92696 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92697 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92698 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92699 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92700 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92701 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92702 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92703 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92704 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92705 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92706 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92707 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92708 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92709 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92710 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92711 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92712 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92713 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92714 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92715 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92716 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92717 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92718 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92719 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92720 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92721 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92722 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92723 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92724 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92725 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92726 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92727 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92728 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92729 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92730 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92731 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92732 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92733 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92734 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92735 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92736 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92737 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92738 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92739 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92740 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92741 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92742 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92743 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92744 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92745 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92746 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92747 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92748 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92749 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92750 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92751 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92752 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92753 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92754 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92755 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92756 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92757 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92758 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92759 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92760 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92761 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92762 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92763 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92764 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92765 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92766 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92767 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92768 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92769 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92770 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92771 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92772 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92773 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92774 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92775 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92776 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92777 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92778 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92779 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92780 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92781 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92782 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92783 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92784 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92785 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92786 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92787 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92788 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92789 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92790 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92791 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92792 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92793 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92794 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92795 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92796 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92797 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92798 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92799 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92800 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92801 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92802 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92803 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92804 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92805 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92806 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92807 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92808 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92809 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92810 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92811 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92812 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92813 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92814 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92815 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92816 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92817 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92818 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92819 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92820 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92821 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92822 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92823 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92824 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92825 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92826 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92827 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92828 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92829 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92830 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92831 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92832 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92833 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92834 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92835 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92836 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92837 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92838 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92839 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92840 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92841 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92842 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92843 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92844 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92845 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92846 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92847 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92848 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92849 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92850 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92851 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92852 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92853 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92854 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92855 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92856 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92857 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92858 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92859 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92860 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92861 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92862 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92863 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92864 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92865 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92866 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92867 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92868 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92869 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92870 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92871 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92872 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92873 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92874 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92875 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92876 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92877 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92878 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92879 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92880 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92881 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92882 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92883 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92884 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92885 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92886 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92887 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92888 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92889 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92890 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92891 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92892 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92893 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92894 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92895 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92896 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92897 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92898 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92899 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92900 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92901 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92902 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92903 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92904 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92905 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92906 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92907 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92908 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92909 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92910 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92911 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			92912 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92913 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92914 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92915 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92916 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92917 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92918 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92919 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92920 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92921 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92922 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92923 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92924 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92925 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92926 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92927 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92928 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92929 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92930 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92931 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92932 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92933 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92934 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92935 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92936 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92937 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92938 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92939 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92940 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92941 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92942 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92943 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92944 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92945 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92946 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92947 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92948 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92949 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92950 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92951 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92952 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92953 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92954 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92955 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92956 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92957 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92958 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92959 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92960 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92961 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92962 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92963 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92964 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92965 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92966 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92967 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92968 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92969 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92970 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92971 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92972 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92973 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92974 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92975 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92976 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92977 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92978 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92979 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92980 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92981 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92982 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92983 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92984 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92985 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92986 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92987 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92988 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92989 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92990 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92991 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92992 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92993 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92994 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92995 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92996 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92997 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92998 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			92999 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
