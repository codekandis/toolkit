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
class ValidatorsWithValueAndExpectedValidationResultDataProvider0099 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			99000 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99001 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99002 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99003 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99004 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99005 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99006 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99007 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99008 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99009 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99010 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99011 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99012 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99013 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99014 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99015 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99016 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99017 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99018 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99019 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99020 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99021 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99022 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99023 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99024 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99025 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99026 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99027 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99028 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99029 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99030 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99031 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99032 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99033 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99034 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99035 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99036 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99037 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99038 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99039 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99040 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99041 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99042 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99043 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99044 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99045 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99046 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99047 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99048 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99049 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99050 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99051 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99052 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99053 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99054 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99055 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99056 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99057 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99058 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99059 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99060 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99061 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99062 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99063 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99064 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99065 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99066 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99067 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99068 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99069 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99070 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99071 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99072 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99073 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99074 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99075 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99076 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99077 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99078 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99079 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99080 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99081 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99082 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99083 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99084 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99085 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99086 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99087 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99088 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99089 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99090 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99091 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99092 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99093 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99094 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99095 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99096 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99097 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99098 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99099 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99100 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99101 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99102 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99103 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99104 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99105 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99106 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99107 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99108 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99109 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99110 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99111 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99112 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99113 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99114 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99115 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99116 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99117 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99118 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99119 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99120 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99121 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99122 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99123 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99124 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99125 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99126 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99127 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99128 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99129 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99130 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99131 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99132 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99133 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99134 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99135 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99136 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99137 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99138 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99139 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99140 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99141 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99142 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99143 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99144 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99145 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99146 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99147 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99148 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99149 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99150 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99151 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99152 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99153 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99154 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99155 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99156 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99157 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99158 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99159 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99160 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99161 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99162 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99163 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99164 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99165 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99166 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99167 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99168 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99169 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99170 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99171 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99172 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99173 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99174 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99175 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99176 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99177 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99178 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99179 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99180 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99181 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99182 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99183 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99184 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99185 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99186 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99187 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99188 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99189 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99190 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99191 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99192 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99193 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99194 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99195 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99196 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99197 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99198 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99199 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99200 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99201 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99202 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99203 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99204 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99205 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99206 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99207 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99208 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99209 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99210 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99211 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99212 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99213 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99214 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99215 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99216 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99217 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99218 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99219 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99220 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99221 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99222 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99223 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99224 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99225 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99226 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99227 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99228 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99229 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99230 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99231 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99232 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99233 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99234 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99235 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99236 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99237 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99238 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99239 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99240 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99241 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99242 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99243 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99244 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99245 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99246 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99247 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99248 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99249 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99250 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99251 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99252 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99253 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99254 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99255 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99256 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99257 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99258 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99259 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99260 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99261 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99262 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99263 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99264 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99265 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99266 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99267 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99268 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99269 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99270 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99271 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99272 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99273 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99274 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99275 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99276 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99277 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99278 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99279 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99280 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99281 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99282 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99283 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99284 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99285 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99286 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99287 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99288 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99289 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99290 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99291 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99292 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99293 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99294 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99295 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99296 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99297 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99298 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99299 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99300 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99301 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99302 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99303 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99304 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99305 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99306 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99307 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99308 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99309 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99310 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99311 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99312 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99313 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99314 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99315 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99316 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99317 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99318 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99319 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99320 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99321 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99322 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99323 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99324 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99325 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99326 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99327 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99328 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99329 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99330 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99331 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99332 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99333 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99334 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99335 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99336 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99337 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99338 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99339 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99340 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99341 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99342 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99343 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99344 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99345 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99346 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99347 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99348 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99349 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99350 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99351 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99352 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99353 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99354 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99355 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99356 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99357 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99358 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99359 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99360 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99361 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99362 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99363 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99364 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99365 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99366 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99367 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99368 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99369 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99370 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99371 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99372 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99373 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99374 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99375 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99376 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99377 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99378 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99379 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99380 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99381 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99382 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99383 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99384 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99385 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99386 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99387 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99388 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99389 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99390 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99391 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99392 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99393 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99394 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99395 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99396 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99397 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99398 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99399 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99400 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99401 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99402 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99403 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99404 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99405 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99406 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99407 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99408 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99409 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99410 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99411 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99412 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99413 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99414 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99415 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99416 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99417 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99418 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99419 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99420 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99421 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99422 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99423 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99424 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99425 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99426 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99427 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99428 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99429 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99430 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99431 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99432 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99433 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99434 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99435 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99436 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99437 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99438 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99439 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99440 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99441 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99442 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99443 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99444 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99445 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99446 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99447 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99448 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99449 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99450 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99451 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99452 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99453 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99454 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99455 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99456 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99457 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99458 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99459 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99460 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99461 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99462 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99463 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99464 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99465 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99466 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99467 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99468 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99469 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99470 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99471 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99472 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99473 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99474 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99475 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99476 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99477 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99478 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99479 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99480 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99481 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99482 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99483 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99484 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99485 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99486 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99487 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99488 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99489 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99490 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99491 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99492 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99493 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99494 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99495 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99496 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99497 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99498 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99499 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99500 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99501 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99502 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99503 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99504 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99505 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99506 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99507 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99508 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99509 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99510 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99511 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99512 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99513 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99514 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99515 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99516 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99517 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99518 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99519 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99520 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99521 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99522 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99523 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99524 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99525 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99526 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99527 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99528 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99529 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99530 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99531 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99532 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99533 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99534 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99535 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99536 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99537 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99538 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99539 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99540 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99541 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99542 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99543 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99544 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99545 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99546 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99547 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99548 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99549 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99550 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99551 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99552 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99553 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99554 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99555 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99556 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99557 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99558 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99559 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99560 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99561 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99562 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99563 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99564 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99565 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99566 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99567 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99568 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99569 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99570 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99571 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99572 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99573 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99574 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99575 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99576 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99577 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99578 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99579 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99580 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99581 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99582 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99583 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99584 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99585 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99586 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99587 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99588 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99589 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99590 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99591 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99592 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99593 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99594 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99595 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99596 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99597 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99598 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99599 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99600 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99601 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99602 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99603 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99604 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99605 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99606 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99607 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99608 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99609 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99610 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99611 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99612 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99613 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99614 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99615 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99616 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99617 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99618 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99619 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99620 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99621 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99622 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99623 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99624 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99625 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99626 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99627 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99628 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99629 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99630 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99631 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99632 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99633 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99634 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99635 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99636 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99637 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99638 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99639 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99640 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99641 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99642 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99643 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99644 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99645 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99646 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99647 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99648 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99649 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99650 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99651 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99652 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99653 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99654 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99655 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99656 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99657 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99658 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99659 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99660 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99661 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99662 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99663 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99664 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99665 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99666 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99667 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99668 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99669 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99670 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99671 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99672 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99673 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99674 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99675 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99676 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99677 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99678 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99679 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99680 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99681 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99682 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99683 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99684 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99685 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99686 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99687 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99688 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99689 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99690 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99691 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99692 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99693 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99694 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99695 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99696 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99697 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99698 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99699 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99700 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99701 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99702 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99703 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99704 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99705 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99706 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99707 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99708 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99709 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99710 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99711 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99712 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99713 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99714 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99715 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99716 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99717 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99718 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99719 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99720 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99721 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99722 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99723 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99724 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99725 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99726 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99727 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99728 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99729 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99730 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99731 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99732 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99733 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99734 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99735 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99736 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99737 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99738 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99739 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99740 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99741 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99742 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99743 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99744 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99745 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99746 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99747 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99748 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99749 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99750 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99751 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99752 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99753 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99754 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99755 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99756 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99757 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99758 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99759 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99760 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99761 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99762 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99763 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99764 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99765 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99766 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99767 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99768 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99769 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99770 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99771 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99772 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99773 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99774 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99775 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99776 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99777 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99778 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99779 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99780 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99781 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99782 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99783 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99784 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99785 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99786 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99787 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99788 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99789 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99790 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99791 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99792 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99793 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99794 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99795 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99796 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99797 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99798 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99799 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99800 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99801 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99802 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99803 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99804 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99805 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99806 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99807 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99808 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99809 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99810 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99811 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99812 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99813 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99814 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99815 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99816 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99817 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99818 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99819 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99820 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99821 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99822 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99823 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99824 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99825 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99826 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99827 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99828 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99829 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99830 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99831 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99832 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99833 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99834 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99835 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99836 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99837 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99838 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99839 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99840 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99841 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99842 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99843 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99844 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99845 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99846 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99847 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99848 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99849 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99850 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99851 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99852 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99853 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99854 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99855 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99856 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99857 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99858 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99859 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99860 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99861 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99862 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99863 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99864 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99865 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99866 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99867 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99868 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99869 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99870 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99871 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99872 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99873 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99874 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99875 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99876 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99877 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99878 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99879 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99880 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99881 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99882 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99883 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99884 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99885 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99886 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99887 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99888 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99889 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99890 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99891 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99892 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99893 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99894 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99895 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99896 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99897 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99898 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99899 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99900 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99901 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99902 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99903 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99904 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99905 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99906 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99907 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99908 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99909 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99910 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99911 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99912 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99913 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99914 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99915 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99916 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99917 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99918 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99919 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99920 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99921 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99922 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99923 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99924 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99925 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99926 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99927 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99928 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99929 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99930 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99931 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99932 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99933 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99934 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99935 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99936 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99937 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99938 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99939 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99940 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99941 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99942 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99943 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99944 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99945 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99946 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99947 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99948 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99949 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99950 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99951 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99952 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99953 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99954 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99955 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99956 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99957 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99958 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99959 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99960 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99961 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99962 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99963 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99964 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99965 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99966 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99967 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99968 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99969 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99970 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99971 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99972 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99973 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99974 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99975 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99976 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99977 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99978 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99979 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99980 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99981 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99982 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99983 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99984 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99985 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99986 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99987 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99988 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99989 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99990 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99991 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99992 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99993 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99994 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99995 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99996 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99997 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			99998 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			99999 => [
				'validator'                => new NullableIsInInterfaceOrClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			]
		];
	}
}
