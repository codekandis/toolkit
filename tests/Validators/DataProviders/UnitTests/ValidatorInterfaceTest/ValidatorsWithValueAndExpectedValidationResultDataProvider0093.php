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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0093 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			93000 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93001 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93002 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93003 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93004 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93005 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93006 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93007 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93008 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93009 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93010 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93011 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93012 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93013 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93014 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93015 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93016 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93017 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93018 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93019 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93020 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93021 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93022 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93023 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93024 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93025 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93026 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93027 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93028 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93029 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93030 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93031 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93032 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93033 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93034 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93035 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93036 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93037 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93038 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93039 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93040 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93041 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93042 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93043 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93044 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93045 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93046 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93047 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93048 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93049 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93050 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93051 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93052 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93053 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93054 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93055 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93056 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93057 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93058 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93059 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93060 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93061 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93062 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93063 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93064 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93065 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93066 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93067 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93068 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93069 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93070 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93071 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93072 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93073 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93074 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93075 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93076 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93077 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93078 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93079 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93080 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93081 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93082 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93083 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93084 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93085 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93086 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93087 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93088 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93089 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93090 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93091 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93092 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93093 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93094 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93095 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93096 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93097 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93098 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93099 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93100 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93101 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93102 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93103 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93104 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93105 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93106 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93107 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93108 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93109 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93110 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93111 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93112 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93113 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93114 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93115 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93116 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93117 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93118 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93119 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93120 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93121 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93122 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93123 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93124 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93125 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93126 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93127 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93128 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93129 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93130 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93131 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93132 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93133 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93134 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93135 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93136 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93137 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93138 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93139 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93140 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93141 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93142 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93143 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93144 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93145 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93146 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93147 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93148 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93149 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93150 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93151 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93152 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93153 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93154 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93155 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93156 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93157 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93158 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93159 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93160 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93161 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93162 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93163 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93164 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93165 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93166 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93167 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93168 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93169 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93170 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93171 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93172 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93173 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93174 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93175 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93176 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93177 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93178 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93179 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93180 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93181 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93182 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93183 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93184 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93185 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93186 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93187 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93188 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93189 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93190 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93191 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93192 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93193 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93194 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93195 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93196 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93197 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93198 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93199 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93200 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93201 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93202 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93203 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93204 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93205 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93206 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93207 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93208 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93209 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93210 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93211 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93212 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93213 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93214 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93215 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93216 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93217 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93218 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93219 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93220 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93221 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93222 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93223 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93224 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93225 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93226 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93227 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93228 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93229 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93230 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93231 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93232 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93233 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93234 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93235 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93236 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93237 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93238 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93239 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93240 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93241 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93242 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93243 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93244 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93245 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93246 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93247 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93248 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93249 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93250 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93251 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93252 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93253 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93254 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93255 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93256 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93257 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93258 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93259 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93260 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93261 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93262 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93263 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93264 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93265 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93266 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93267 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93268 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93269 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93270 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93271 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93272 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93273 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93274 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93275 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93276 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93277 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93278 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93279 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93280 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93281 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93282 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93283 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93284 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93285 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93286 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93287 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93288 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93289 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93290 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93291 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93292 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93293 => [
				'validator'                => new NullableIsInBackedEnumValuesArrayValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93294 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93295 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93296 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93297 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93298 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93299 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93300 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93301 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93302 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93303 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93304 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93305 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93306 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93307 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93308 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93309 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93310 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93311 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93312 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93313 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93314 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93315 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93316 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93317 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93318 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93319 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93320 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93321 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93322 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93323 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93324 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93325 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93326 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93327 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93328 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93329 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93330 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93331 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93332 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93333 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93334 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93335 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93336 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93337 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93338 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93339 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93340 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93341 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93342 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93343 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93344 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93345 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93346 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93347 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93348 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93349 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93350 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93351 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93352 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93353 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93354 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93355 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93356 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93357 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93358 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93359 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93360 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93361 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93362 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93363 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93364 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93365 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93366 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93367 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93368 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93369 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93370 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93371 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93372 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93373 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93374 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93375 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93376 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93377 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93378 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93379 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93380 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93381 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93382 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93383 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93384 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93385 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93386 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93387 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93388 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93389 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93390 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93391 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93392 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93393 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93394 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93395 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93396 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93397 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93398 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93399 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93400 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93401 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93402 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93403 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93404 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93405 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93406 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93407 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93408 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93409 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93410 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93411 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93412 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93413 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93414 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93415 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93416 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93417 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93418 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93419 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93420 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93421 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93422 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93423 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93424 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93425 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93426 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93427 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93428 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93429 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93430 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93431 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93432 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93433 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93434 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93435 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93436 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93437 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93438 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93439 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93440 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93441 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93442 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93443 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93444 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93445 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93446 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93447 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93448 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93449 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93450 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93451 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93452 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93453 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93454 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93455 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93456 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93457 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93458 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93459 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93460 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93461 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93462 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93463 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93464 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93465 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93466 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93467 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93468 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93469 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93470 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93471 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93472 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93473 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93474 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93475 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93476 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93477 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93478 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93479 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93480 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93481 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93482 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93483 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93484 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93485 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93486 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93487 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93488 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93489 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93490 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93491 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93492 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93493 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93494 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93495 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93496 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93497 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93498 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93499 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93500 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93501 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93502 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93503 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93504 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93505 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93506 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93507 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93508 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93509 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93510 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93511 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93512 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93513 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93514 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93515 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93516 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93517 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93518 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93519 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93520 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93521 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93522 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93523 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93524 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93525 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93526 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93527 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93528 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93529 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93530 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93531 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93532 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93533 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93534 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93535 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93536 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93537 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93538 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93539 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93540 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93541 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93542 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93543 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93544 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93545 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93546 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93547 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93548 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93549 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93550 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93551 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93552 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93553 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93554 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93555 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93556 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93557 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93558 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93559 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93560 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93561 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93562 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93563 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93564 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93565 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93566 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93567 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93568 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93569 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93570 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93571 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93572 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93573 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93574 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93575 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93576 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93577 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93578 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93579 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93580 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93581 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93582 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93583 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93584 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93585 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93586 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93587 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93588 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93589 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93590 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93591 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93592 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93593 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93594 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93595 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93596 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93597 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93598 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93599 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93600 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93601 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93602 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93603 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93604 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93605 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93606 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93607 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93608 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93609 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93610 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93611 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93612 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93613 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93614 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93615 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93616 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93617 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93618 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93619 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93620 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93621 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93622 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93623 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93624 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93625 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93626 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93627 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93628 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93629 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93630 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93631 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93632 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93633 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93634 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93635 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93636 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93637 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93638 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93639 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93640 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93641 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93642 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93643 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93644 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93645 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93646 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93647 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93648 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93649 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93650 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93651 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93652 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93653 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93654 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93655 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93656 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93657 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93658 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93659 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93660 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93661 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93662 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93663 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93664 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93665 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93666 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93667 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93668 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93669 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93670 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93671 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93672 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93673 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93674 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93675 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93676 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93677 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93678 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93679 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93680 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93681 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93682 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93683 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93684 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93685 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93686 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93687 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93688 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93689 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93690 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93691 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93692 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93693 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93694 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93695 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93696 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93697 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93698 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93699 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93700 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93701 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93702 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93703 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93704 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93705 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93706 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93707 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93708 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93709 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93710 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93711 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93712 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93713 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93714 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93715 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93716 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93717 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93718 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93719 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93720 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93721 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93722 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93723 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93724 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93725 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93726 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93727 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93728 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93729 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93730 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93731 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93732 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93733 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93734 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93735 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93736 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93737 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93738 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93739 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93740 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93741 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93742 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93743 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93744 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93745 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93746 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93747 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93748 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93749 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93750 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93751 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93752 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93753 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93754 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93755 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93756 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93757 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93758 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93759 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93760 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93761 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93762 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93763 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93764 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93765 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93766 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93767 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93768 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93769 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93770 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93771 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93772 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93773 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93774 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93775 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93776 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93777 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93778 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93779 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93780 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93781 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93782 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93783 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93784 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93785 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93786 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93787 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93788 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93789 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93790 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93791 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93792 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93793 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93794 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93795 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93796 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93797 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93798 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93799 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93800 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93801 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93802 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93803 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93804 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93805 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93806 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93807 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93808 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93809 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93810 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93811 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93812 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93813 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93814 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93815 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93816 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93817 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93818 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93819 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93820 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93821 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93822 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93823 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93824 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93825 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93826 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93827 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93828 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93829 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93830 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93831 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93832 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93833 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93834 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93835 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93836 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93837 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93838 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93839 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93840 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93841 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93842 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93843 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93844 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93845 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93846 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93847 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93848 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93849 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93850 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93851 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93852 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93853 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93854 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93855 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93856 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93857 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93858 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93859 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93860 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93861 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93862 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93863 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93864 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93865 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93866 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93867 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93868 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93869 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93870 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93871 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93872 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93873 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93874 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93875 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93876 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93877 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93878 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93879 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93880 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93881 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93882 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93883 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93884 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93885 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93886 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93887 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93888 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93889 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93890 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93891 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93892 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93893 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93894 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93895 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93896 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93897 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93898 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93899 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93900 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93901 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93902 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93903 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93904 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93905 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93906 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93907 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93908 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93909 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93910 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93911 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93912 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93913 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93914 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93915 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93916 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93917 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93918 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93919 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93920 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93921 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93922 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93923 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93924 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93925 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93926 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93927 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93928 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93929 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93930 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93931 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93932 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93933 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93934 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93935 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93936 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93937 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93938 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93939 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93940 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93941 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93942 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93943 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93944 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93945 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93946 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93947 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93948 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93949 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93950 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93951 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93952 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93953 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93954 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93955 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93956 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93957 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93958 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93959 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93960 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93961 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93962 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93963 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93964 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93965 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93966 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93967 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93968 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93969 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93970 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93971 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93972 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93973 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93974 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93975 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			93976 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93977 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93978 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93979 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93980 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93981 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93982 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93983 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93984 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93985 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93986 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93987 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93988 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93989 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93990 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93991 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93992 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93993 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93994 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93995 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93996 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93997 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93998 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			93999 => [
				'validator'                => new NullableIsInBackedEnumValuesValidator(Values::STRING_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
