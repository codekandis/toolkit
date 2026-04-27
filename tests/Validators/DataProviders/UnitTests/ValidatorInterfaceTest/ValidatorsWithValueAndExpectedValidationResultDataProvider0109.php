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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0109 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			109000 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109001 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109002 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109003 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109004 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109005 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109006 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109007 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109008 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109009 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109010 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109011 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109012 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109013 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109014 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109015 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109016 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109017 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109018 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109019 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109020 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109021 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109022 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109023 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109024 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109025 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109026 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109027 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109028 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109029 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109030 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109031 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109032 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109033 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109034 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109035 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109036 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109037 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109038 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109039 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109040 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109041 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109042 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109043 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109044 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109045 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109046 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109047 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109048 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109049 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109050 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109051 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109052 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109053 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109054 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109055 => [
				'validator'                => new NullableIsInterfaceNameValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109056 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109057 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109058 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109059 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109060 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109061 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109062 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109063 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109064 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109065 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109066 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109067 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109068 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109069 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109070 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109071 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109072 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109073 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109074 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109075 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109076 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109077 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109078 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109079 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109080 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109081 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109082 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109083 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109084 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109085 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109086 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109087 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109088 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109089 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109090 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109091 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109092 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109093 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109094 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109095 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109096 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109097 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109098 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109099 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109100 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109101 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109102 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109103 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109104 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109105 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109106 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109107 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109108 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109109 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109110 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109111 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109112 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109113 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109114 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109115 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109116 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109117 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109118 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109119 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109120 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109121 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109122 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109123 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109124 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109125 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109126 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109127 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109128 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109129 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109130 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109131 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109132 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109133 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109134 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109135 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109136 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109137 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109138 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109139 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109140 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109141 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109142 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109143 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109144 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109145 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109146 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109147 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109148 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109149 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109150 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109151 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109152 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109153 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109154 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109155 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109156 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109157 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109158 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109159 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109160 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109161 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109162 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109163 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109164 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109165 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109166 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109167 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109168 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109169 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109170 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109171 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109172 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109173 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109174 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109175 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109176 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109177 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109178 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109179 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109180 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109181 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109182 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109183 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109184 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109185 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109186 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109187 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109188 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109189 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109190 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109191 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109192 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109193 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109194 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109195 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109196 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109197 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109198 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109199 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109200 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109201 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109202 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109203 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109204 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109205 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109206 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109207 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109208 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109209 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109210 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109211 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109212 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109213 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109214 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109215 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109216 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109217 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109218 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109219 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109220 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109221 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109222 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109223 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109224 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109225 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109226 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109227 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109228 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109229 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109230 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109231 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109232 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109233 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109234 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109235 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109236 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109237 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109238 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109239 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109240 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109241 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109242 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109243 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109244 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109245 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109246 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109247 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109248 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109249 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109250 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109251 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109252 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109253 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109254 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109255 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109256 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109257 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109258 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109259 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109260 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109261 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109262 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109263 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109264 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109265 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109266 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109267 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109268 => [
				'validator'                => new NullableIsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109269 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109270 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109271 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109272 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109273 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109274 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109275 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109276 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109277 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109278 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109279 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109280 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109281 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109282 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109283 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109284 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109285 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109286 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109287 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109288 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109289 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109290 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109291 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109292 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109293 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109294 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109295 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109296 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109297 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109298 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109299 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109300 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109301 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109302 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109303 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109304 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109305 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109306 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109307 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109308 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109309 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109310 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109311 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109312 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109313 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109314 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109315 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109316 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109317 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109318 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109319 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109320 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109321 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109322 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109323 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109324 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109325 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109326 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109327 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109328 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109329 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109330 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109331 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109332 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109333 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109334 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109335 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109336 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109337 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109338 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109339 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109340 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109341 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109342 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109343 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109344 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109345 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109346 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109347 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109348 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109349 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109350 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109351 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109352 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109353 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109354 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109355 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109356 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109357 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109358 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109359 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109360 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109361 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109362 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109363 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109364 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109365 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109366 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109367 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109368 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109369 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109370 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109371 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109372 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109373 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109374 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109375 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109376 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109377 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109378 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109379 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109380 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109381 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109382 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109383 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109384 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109385 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109386 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109387 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109388 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109389 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109390 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109391 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109392 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109393 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109394 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109395 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109396 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109397 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109398 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109399 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109400 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109401 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109402 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109403 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109404 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109405 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109406 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109407 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109408 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109409 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109410 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109411 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109412 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109413 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109414 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109415 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109416 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109417 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109418 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109419 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109420 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109421 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109422 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109423 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109424 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109425 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109426 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109427 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109428 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109429 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109430 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109431 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109432 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109433 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109434 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109435 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109436 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109437 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109438 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109439 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109440 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109441 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109442 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109443 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109444 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109445 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109446 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109447 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109448 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109449 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109450 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109451 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109452 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109453 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109454 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109455 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109456 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109457 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109458 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109459 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109460 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109461 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109462 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109463 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109464 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109465 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109466 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109467 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109468 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109469 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109470 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109471 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109472 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109473 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109474 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109475 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109476 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109477 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109478 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109479 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109480 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109481 => [
				'validator'                => new NullableIsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109482 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109483 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109484 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109485 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109486 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109487 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109488 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109489 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109490 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109491 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109492 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109493 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109494 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109495 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109496 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109497 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109498 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109499 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109500 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109501 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109502 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109503 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109504 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109505 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109506 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109507 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109508 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109509 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109510 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109511 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109512 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109513 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109514 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109515 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109516 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109517 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109518 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109519 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109520 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109521 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109522 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109523 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109524 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109525 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109526 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109527 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109528 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109529 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109530 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109531 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109532 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109533 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109534 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109535 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109536 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109537 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109538 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109539 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109540 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109541 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109542 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109543 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109544 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109545 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109546 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109547 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109548 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109549 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109550 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109551 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109552 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109553 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109554 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109555 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109556 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109557 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109558 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109559 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109560 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109561 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109562 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109563 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109564 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109565 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109566 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109567 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109568 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109569 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109570 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109571 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109572 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109573 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109574 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109575 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109576 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109577 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109578 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109579 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109580 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109581 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109582 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109583 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109584 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109585 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109586 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109587 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109588 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109589 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109590 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109591 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109592 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109593 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109594 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109595 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109596 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109597 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109598 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109599 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109600 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109601 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109602 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109603 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109604 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109605 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109606 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109607 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109608 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109609 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109610 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109611 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109612 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109613 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109614 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109615 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109616 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109617 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109618 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109619 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109620 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109621 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109622 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109623 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109624 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109625 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109626 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109627 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109628 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109629 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109630 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109631 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109632 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109633 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109634 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109635 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109636 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109637 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109638 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109639 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109640 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109641 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109642 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109643 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109644 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109645 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109646 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109647 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109648 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109649 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109650 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109651 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109652 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109653 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109654 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109655 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109656 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109657 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109658 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109659 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109660 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109661 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109662 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109663 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109664 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109665 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109666 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109667 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109668 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109669 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109670 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109671 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109672 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109673 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109674 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109675 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109676 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109677 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109678 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109679 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109680 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109681 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109682 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109683 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109684 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109685 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109686 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109687 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109688 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109689 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109690 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109691 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109692 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109693 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109694 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109695 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109696 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109697 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109698 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109699 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109700 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109701 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109702 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109703 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109704 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109705 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109706 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109707 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109708 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109709 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109710 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109711 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109712 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109713 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109714 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109715 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109716 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109717 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109718 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109719 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109720 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109721 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109722 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109723 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109724 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109725 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109726 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109727 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109728 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109729 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109730 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109731 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109732 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109733 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109734 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109735 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109736 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109737 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109738 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109739 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109740 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109741 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109742 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109743 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109744 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109745 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109746 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109747 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109748 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109749 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109750 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109751 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109752 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109753 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109754 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109755 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109756 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109757 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109758 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109759 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109760 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109761 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109762 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109763 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109764 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109765 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109766 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109767 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109768 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109769 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109770 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109771 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109772 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109773 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109774 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109775 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109776 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109777 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109778 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109779 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109780 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109781 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109782 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109783 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109784 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109785 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109786 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109787 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109788 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109789 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109790 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109791 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109792 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109793 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109794 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109795 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109796 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109797 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109798 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109799 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109800 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109801 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109802 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109803 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109804 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109805 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109806 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109807 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109808 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109809 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109810 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109811 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109812 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109813 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109814 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109815 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109816 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109817 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109818 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109819 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109820 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109821 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109822 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109823 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109824 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109825 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109826 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109827 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109828 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109829 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109830 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109831 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109832 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109833 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109834 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109835 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109836 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109837 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109838 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109839 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109840 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109841 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109842 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109843 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109844 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109845 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109846 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109847 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109848 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109849 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109850 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109851 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109852 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109853 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109854 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109855 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109856 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109857 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109858 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109859 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109860 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109861 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109862 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109863 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109864 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109865 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109866 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109867 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109868 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109869 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109870 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109871 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109872 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109873 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109874 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109875 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109876 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109877 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109878 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109879 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109880 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109881 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109882 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109883 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109884 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109885 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109886 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109887 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109888 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109889 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109890 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109891 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109892 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109893 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109894 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109895 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109896 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109897 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109898 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109899 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109900 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109901 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109902 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109903 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109904 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109905 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109906 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109907 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109908 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109909 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109910 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109911 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109912 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109913 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109914 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109915 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109916 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109917 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109918 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109919 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109920 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109921 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109922 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109923 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109924 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109925 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109926 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109927 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109928 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109929 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109930 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109931 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109932 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109933 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109934 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109935 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109936 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109937 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109938 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109939 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109940 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109941 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109942 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109943 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109944 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109945 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109946 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109947 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109948 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109949 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109950 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109951 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109952 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109953 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109954 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109955 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109956 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109957 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109958 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109959 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109960 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109961 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109962 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109963 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109964 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109965 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109966 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			109967 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109968 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109969 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109970 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109971 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109972 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109973 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109974 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109975 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109976 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109977 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109978 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109979 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109980 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109981 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109982 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109983 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109984 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109985 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109986 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109987 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109988 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109989 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109990 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109991 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109992 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109993 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109994 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109995 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109996 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109997 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109998 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			109999 => [
				'validator'                => new NullableIsMatchingRegularExpressionArrayValidator(Values::REG_EX_FLOAT_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
