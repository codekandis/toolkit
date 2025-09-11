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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0057 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			57000 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57001 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57002 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57003 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57004 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57005 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57006 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57007 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57008 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57009 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57010 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57011 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57012 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57013 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57014 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57015 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57016 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57017 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57018 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57019 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57020 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57021 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57022 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57023 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57024 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57025 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57026 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57027 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57028 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57029 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57030 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57031 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57032 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57033 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57034 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57035 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57036 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57037 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57038 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57039 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57040 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57041 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57042 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57043 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57044 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57045 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57046 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57047 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57048 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57049 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57050 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57051 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57052 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57053 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57054 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57055 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57056 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57057 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57058 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57059 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57060 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57061 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57062 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57063 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57064 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57065 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57066 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57067 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57068 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57069 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57070 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57071 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57072 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57073 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57074 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57075 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57076 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57077 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57078 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57079 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57080 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57081 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57082 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57083 => [
				'validator'                => new IsSubClassOfArrayValidator(Values::CLASS_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57084 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57085 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57086 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57087 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57088 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57089 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57090 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57091 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57092 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57093 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57094 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57095 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57096 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57097 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57098 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57099 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57100 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57101 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57102 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57103 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57104 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57105 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57106 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57107 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57108 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57109 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57110 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57111 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57112 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57113 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57114 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57115 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57116 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57117 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57118 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57119 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57120 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57121 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57122 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57123 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57124 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57125 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57126 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57127 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57128 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57129 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57130 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57131 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57132 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57133 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57134 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57135 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57136 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57137 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57138 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57139 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57140 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57141 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57142 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57143 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57144 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57145 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57146 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57147 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57148 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57149 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57150 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57151 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57152 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57153 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57154 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57155 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57156 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57157 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57158 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57159 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57160 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57161 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57162 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57163 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57164 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57165 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57166 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57167 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57168 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57169 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57170 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57171 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57172 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57173 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57174 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57175 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57176 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57177 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57178 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57179 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57180 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57181 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57182 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57183 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57184 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57185 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57186 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57187 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57188 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57189 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57190 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57191 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57192 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57193 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57194 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57195 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57196 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57197 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57198 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57199 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57200 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57201 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57202 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57203 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57204 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57205 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57206 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57207 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57208 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57209 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57210 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57211 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57212 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57213 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			57214 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57215 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57216 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57217 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57218 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57219 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57220 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57221 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57222 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57223 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57224 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57225 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57226 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57227 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57228 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57229 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57230 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57231 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57232 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57233 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57234 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57235 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57236 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57237 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57238 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57239 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57240 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57241 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57242 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57243 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57244 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57245 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57246 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57247 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57248 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57249 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57250 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57251 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57252 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57253 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57254 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57255 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57256 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57257 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57258 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57259 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57260 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57261 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57262 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57263 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57264 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57265 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57266 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57267 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57268 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57269 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57270 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57271 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57272 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57273 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57274 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57275 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57276 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57277 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57278 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57279 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			57280 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57281 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57282 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57283 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57284 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57285 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57286 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57287 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57288 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57289 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57290 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57291 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57292 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57293 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57294 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57295 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57296 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57297 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57298 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57299 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57300 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57301 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57302 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57303 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57304 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57305 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57306 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57307 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57308 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57309 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57310 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57311 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57312 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57313 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57314 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57315 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57316 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57317 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57318 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57319 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57320 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57321 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57322 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57323 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57324 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57325 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57326 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57327 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57328 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57329 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57330 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57331 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57332 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57333 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57334 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57335 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57336 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57337 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57338 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57339 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57340 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57341 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57342 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57343 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57344 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57345 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57346 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57347 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57348 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57349 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57350 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57351 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57352 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57353 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57354 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57355 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57356 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57357 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57358 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57359 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57360 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57361 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57362 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57363 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57364 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57365 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57366 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57367 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57368 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57369 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57370 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57371 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57372 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57373 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57374 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57375 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57376 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57377 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57378 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57379 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57380 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57381 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57382 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57383 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57384 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57385 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57386 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57387 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57388 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57389 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57390 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57391 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57392 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57393 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57394 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57395 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57396 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57397 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57398 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57399 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57400 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57401 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57402 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57403 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57404 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57405 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57406 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57407 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57408 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57409 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57410 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57411 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57412 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57413 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57414 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57415 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57416 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57417 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57418 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57419 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57420 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57421 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57422 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57423 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57424 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57425 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57426 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57427 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			57428 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57429 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57430 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57431 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57432 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57433 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57434 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57435 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57436 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57437 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57438 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57439 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57440 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57441 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57442 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57443 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57444 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57445 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57446 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57447 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57448 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57449 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57450 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57451 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57452 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57453 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57454 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57455 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57456 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57457 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57458 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57459 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57460 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57461 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57462 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57463 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57464 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57465 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57466 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57467 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57468 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57469 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57470 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57471 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57472 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57473 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57474 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57475 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57476 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57477 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57478 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57479 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57480 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57481 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57482 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57483 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57484 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57485 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57486 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57487 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57488 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57489 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57490 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57491 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57492 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57493 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			57494 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57495 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57496 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57497 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57498 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57499 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57500 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57501 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57502 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57503 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57504 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57505 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57506 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57507 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57508 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57509 => [
				'validator'                => new IsSubClassOfValidator(Values::INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57510 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57511 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57512 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57513 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57514 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57515 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57516 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57517 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57518 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57519 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57520 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57521 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57522 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57523 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57524 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57525 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57526 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57527 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57528 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57529 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57530 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57531 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57532 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57533 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57534 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57535 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57536 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57537 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57538 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57539 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57540 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57541 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57542 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57543 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57544 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57545 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57546 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57547 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57548 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57549 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57550 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57551 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57552 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57553 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57554 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57555 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57556 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57557 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57558 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57559 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57560 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57561 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57562 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57563 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57564 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57565 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57566 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57567 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57568 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57569 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57570 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57571 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57572 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57573 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57574 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57575 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57576 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57577 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57578 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57579 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57580 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57581 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57582 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57583 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57584 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57585 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57586 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57587 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57588 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57589 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57590 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57591 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57592 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57593 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57594 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57595 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57596 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57597 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57598 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57599 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57600 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57601 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57602 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57603 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57604 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57605 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57606 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57607 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57608 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57609 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57610 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57611 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57612 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57613 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57614 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57615 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57616 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57617 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57618 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57619 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57620 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57621 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57622 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57623 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57624 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57625 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57626 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57627 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57628 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57629 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57630 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57631 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57632 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57633 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57634 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57635 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57636 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57637 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57638 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57639 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57640 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57641 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57642 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57643 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57644 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57645 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57646 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57647 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57648 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57649 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57650 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57651 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57652 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57653 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57654 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57655 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57656 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57657 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57658 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57659 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57660 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57661 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57662 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57663 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57664 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57665 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57666 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57667 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57668 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57669 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57670 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57671 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57672 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57673 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57674 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57675 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57676 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57677 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57678 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57679 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57680 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57681 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57682 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57683 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57684 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57685 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57686 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57687 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57688 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57689 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57690 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57691 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57692 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57693 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57694 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57695 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57696 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57697 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57698 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57699 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57700 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57701 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57702 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57703 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57704 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57705 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57706 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57707 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57708 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57709 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57710 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57711 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57712 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57713 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57714 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57715 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57716 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57717 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57718 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57719 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57720 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57721 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57722 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57723 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57724 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57725 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57726 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57727 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57728 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57729 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57730 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57731 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57732 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57733 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57734 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57735 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57736 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57737 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57738 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57739 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57740 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57741 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57742 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57743 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57744 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57745 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57746 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57747 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57748 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57749 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57750 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57751 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57752 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57753 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57754 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57755 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57756 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57757 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57758 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57759 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57760 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57761 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57762 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57763 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57764 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57765 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57766 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57767 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57768 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57769 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57770 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57771 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57772 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57773 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57774 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57775 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57776 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57777 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57778 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57779 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57780 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57781 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57782 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57783 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57784 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57785 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57786 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57787 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57788 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57789 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57790 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57791 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57792 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57793 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57794 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57795 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57796 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57797 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57798 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57799 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57800 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57801 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57802 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57803 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57804 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57805 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57806 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57807 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57808 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57809 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57810 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57811 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57812 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57813 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57814 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57815 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57816 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57817 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57818 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57819 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57820 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57821 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57822 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57823 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57824 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57825 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57826 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57827 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57828 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57829 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57830 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57831 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57832 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57833 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57834 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57835 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57836 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57837 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57838 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57839 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57840 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57841 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57842 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57843 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57844 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57845 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57846 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57847 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57848 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57849 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57850 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57851 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57852 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57853 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57854 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57855 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57856 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57857 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57858 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57859 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57860 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57861 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57862 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57863 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57864 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57865 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57866 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57867 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57868 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57869 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57870 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57871 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57872 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57873 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57874 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57875 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57876 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57877 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57878 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57879 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57880 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57881 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57882 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57883 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57884 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57885 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57886 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57887 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57888 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57889 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57890 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57891 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57892 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57893 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57894 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57895 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57896 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57897 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57898 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57899 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57900 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57901 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57902 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57903 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57904 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57905 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57906 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57907 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57908 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57909 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57910 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57911 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57912 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57913 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57914 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57915 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57916 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57917 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57918 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57919 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57920 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57921 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57922 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57923 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57924 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57925 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57926 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57927 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57928 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57929 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57930 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57931 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57932 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57933 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57934 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57935 => [
				'validator'                => new IsSubClassOfValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57936 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57937 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57938 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57939 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57940 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57941 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57942 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57943 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57944 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57945 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57946 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57947 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57948 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57949 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57950 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57951 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57952 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57953 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57954 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57955 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57956 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57957 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57958 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57959 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57960 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57961 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57962 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57963 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57964 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57965 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57966 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57967 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57968 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57969 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57970 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57971 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57972 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57973 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57974 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57975 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57976 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57977 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57978 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57979 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57980 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57981 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57982 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57983 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57984 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57985 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57986 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57987 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57988 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57989 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57990 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57991 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57992 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57993 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57994 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57995 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57996 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57997 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57998 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			57999 => [
				'validator'                => new IsSubClassOfValidator(Values::CLASS_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
