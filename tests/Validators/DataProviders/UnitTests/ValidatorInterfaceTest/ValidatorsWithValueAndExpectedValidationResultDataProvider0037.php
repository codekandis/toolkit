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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0037 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			37000 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37001 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37002 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37003 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37004 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37005 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37006 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37007 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37008 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37009 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37010 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37011 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37012 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37013 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37014 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37015 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37016 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37017 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37018 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37019 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37020 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37021 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37022 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37023 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37024 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37025 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37026 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37027 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37028 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37029 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37030 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37031 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37032 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37033 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37034 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37035 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37036 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37037 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37038 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37039 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37040 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37041 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37042 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37043 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37044 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37045 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37046 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37047 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37048 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37049 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37050 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37051 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37052 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37053 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37054 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37055 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37056 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37057 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37058 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37059 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37060 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37061 => [
				'validator'                => new IsInClassConstantsValidator(Values::CONCRETE_INTERFACE_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37062 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37063 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37064 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37065 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37066 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37067 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37068 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37069 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37070 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37071 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37072 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37073 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37074 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37075 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37076 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37077 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37078 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37079 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37080 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37081 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37082 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37083 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37084 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37085 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37086 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37087 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37088 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37089 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37090 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37091 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37092 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37093 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37094 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37095 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37096 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37097 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37098 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37099 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37100 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37101 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37102 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37103 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37104 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37105 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37106 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37107 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37108 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37109 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37110 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37111 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37112 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37113 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37114 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37115 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37116 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37117 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37118 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37119 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37120 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37121 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37122 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37123 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37124 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37125 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37126 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37127 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37128 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37129 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37130 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37131 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37132 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37133 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37134 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37135 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37136 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37137 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37138 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37139 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37140 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37141 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37142 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37143 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37144 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37145 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37146 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37147 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37148 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37149 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37150 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37151 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37152 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37153 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37154 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37155 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37156 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37157 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37158 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37159 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37160 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37161 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37162 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37163 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37164 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37165 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37166 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37167 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37168 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37169 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37170 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37171 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37172 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37173 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37174 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37175 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37176 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37177 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37178 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37179 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37180 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37181 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37182 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37183 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37184 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37185 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37186 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37187 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37188 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37189 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37190 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37191 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37192 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37193 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37194 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37195 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37196 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37197 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37198 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37199 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37200 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37201 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37202 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37203 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37204 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37205 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37206 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37207 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37208 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37209 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37210 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37211 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37212 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37213 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37214 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37215 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37216 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37217 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37218 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37219 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37220 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37221 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37222 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37223 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37224 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37225 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37226 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37227 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37228 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37229 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37230 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37231 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37232 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37233 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37234 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37235 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37236 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37237 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37238 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37239 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37240 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37241 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37242 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37243 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37244 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37245 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37246 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37247 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37248 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37249 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37250 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37251 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37252 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37253 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37254 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37255 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37256 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37257 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37258 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37259 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37260 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37261 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37262 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37263 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37264 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37265 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37266 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37267 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37268 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37269 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37270 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37271 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37272 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37273 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37274 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37275 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37276 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37277 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37278 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37279 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37280 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37281 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37282 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37283 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37284 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37285 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37286 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37287 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37288 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37289 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37290 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37291 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37292 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37293 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37294 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37295 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37296 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37297 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37298 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37299 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37300 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37301 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37302 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37303 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37304 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37305 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37306 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37307 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37308 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37309 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37310 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37311 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37312 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37313 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37314 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37315 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37316 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37317 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37318 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37319 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37320 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37321 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37322 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37323 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37324 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37325 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37326 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37327 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37328 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37329 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37330 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37331 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37332 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37333 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37334 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37335 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37336 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37337 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37338 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37339 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37340 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37341 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37342 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37343 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37344 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37345 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37346 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37347 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37348 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37349 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37350 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37351 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37352 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37353 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37354 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37355 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37356 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37357 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37358 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37359 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37360 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37361 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37362 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37363 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37364 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37365 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37366 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37367 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37368 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37369 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37370 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37371 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37372 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37373 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37374 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37375 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37376 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37377 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37378 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37379 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37380 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37381 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37382 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37383 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37384 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37385 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37386 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37387 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37388 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37389 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37390 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37391 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37392 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37393 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37394 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37395 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37396 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37397 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37398 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37399 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37400 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37401 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37402 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37403 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37404 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37405 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37406 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37407 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37408 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37409 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37410 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37411 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37412 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37413 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37414 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37415 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37416 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37417 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37418 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37419 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37420 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37421 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37422 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37423 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37424 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37425 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37426 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37427 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37428 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37429 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37430 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37431 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37432 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37433 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37434 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37435 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37436 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37437 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37438 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37439 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37440 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37441 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37442 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37443 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37444 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37445 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37446 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37447 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37448 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37449 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37450 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37451 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37452 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37453 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37454 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37455 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37456 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37457 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37458 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37459 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37460 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37461 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37462 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37463 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37464 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37465 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37466 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37467 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37468 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37469 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37470 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37471 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37472 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37473 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37474 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37475 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37476 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37477 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37478 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37479 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37480 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37481 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37482 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37483 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37484 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37485 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37486 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37487 => [
				'validator'                => new IsInIntegerBackedEnumValuesArrayValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37488 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37489 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37490 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37491 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37492 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37493 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37494 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37495 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37496 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37497 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37498 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37499 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37500 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37501 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37502 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37503 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37504 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37505 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37506 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37507 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37508 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37509 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37510 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37511 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37512 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37513 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37514 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37515 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37516 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37517 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37518 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37519 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37520 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37521 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37522 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37523 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37524 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37525 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37526 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37527 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37528 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37529 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37530 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37531 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37532 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37533 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37534 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37535 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37536 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37537 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37538 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37539 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37540 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37541 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37542 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37543 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37544 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37545 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37546 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37547 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37548 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37549 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37550 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37551 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37552 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37553 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37554 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37555 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37556 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37557 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37558 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37559 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37560 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37561 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37562 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37563 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37564 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37565 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37566 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37567 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37568 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37569 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37570 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37571 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37572 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37573 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37574 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37575 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37576 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37577 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37578 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37579 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37580 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37581 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37582 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37583 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37584 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37585 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37586 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37587 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37588 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37589 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37590 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37591 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37592 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37593 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37594 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37595 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37596 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37597 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37598 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37599 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37600 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37601 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37602 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37603 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37604 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37605 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37606 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37607 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37608 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37609 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37610 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37611 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37612 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37613 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37614 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37615 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37616 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37617 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37618 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37619 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37620 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37621 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37622 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37623 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37624 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37625 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37626 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37627 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37628 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37629 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37630 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37631 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37632 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37633 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37634 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37635 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37636 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37637 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37638 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37639 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37640 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37641 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37642 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37643 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37644 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37645 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37646 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37647 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37648 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37649 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37650 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37651 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37652 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37653 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37654 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37655 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37656 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37657 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37658 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37659 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37660 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37661 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37662 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37663 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37664 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37665 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37666 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37667 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37668 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37669 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37670 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37671 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37672 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37673 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37674 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37675 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37676 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37677 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37678 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37679 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37680 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37681 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37682 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37683 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37684 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37685 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37686 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37687 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37688 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37689 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37690 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37691 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37692 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37693 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37694 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37695 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37696 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37697 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37698 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37699 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37700 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_1),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37701 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37702 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37703 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37704 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37705 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37706 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37707 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37708 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37709 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37710 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37711 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37712 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37713 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37714 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37715 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37716 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37717 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37718 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37719 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37720 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37721 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37722 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37723 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37724 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37725 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37726 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37727 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37728 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37729 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37730 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37731 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37732 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37733 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37734 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37735 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37736 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37737 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37738 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37739 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37740 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37741 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37742 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37743 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37744 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37745 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37746 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37747 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37748 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37749 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37750 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37751 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37752 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37753 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37754 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37755 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37756 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37757 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37758 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37759 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37760 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37761 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37762 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37763 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37764 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37765 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37766 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37767 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37768 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37769 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37770 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37771 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37772 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37773 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37774 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37775 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37776 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37777 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37778 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37779 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37780 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37781 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37782 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37783 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37784 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37785 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37786 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37787 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37788 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37789 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37790 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37791 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37792 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37793 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37794 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37795 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37796 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37797 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37798 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37799 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37800 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37801 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37802 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37803 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37804 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37805 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37806 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37807 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37808 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37809 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37810 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37811 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37812 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37813 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37814 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37815 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37816 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37817 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37818 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37819 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37820 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37821 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37822 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37823 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37824 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37825 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37826 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37827 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37828 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37829 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37830 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37831 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37832 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37833 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37834 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37835 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37836 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37837 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37838 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37839 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37840 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37841 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37842 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37843 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37844 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37845 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37846 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37847 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37848 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37849 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37850 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37851 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37852 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37853 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37854 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37855 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37856 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37857 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37858 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37859 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37860 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37861 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37862 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37863 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37864 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37865 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37866 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37867 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37868 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37869 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37870 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37871 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37872 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37873 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37874 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37875 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37876 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37877 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37878 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37879 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37880 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37881 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37882 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37883 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37884 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37885 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37886 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37887 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37888 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37889 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37890 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37891 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37892 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37893 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37894 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37895 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37896 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37897 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37898 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37899 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37900 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37901 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37902 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37903 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37904 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37905 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37906 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37907 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37908 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37909 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37910 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37911 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37912 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37913 => [
				'validator'                => new IsInIntegerBackedEnumValuesValidator(Values::INTEGER_BACKED_ENUM_NAME_2),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37914 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37915 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37916 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37917 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37918 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37919 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37920 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37921 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37922 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37923 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37924 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37925 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37926 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37927 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37928 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37929 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37930 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37931 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37932 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37933 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37934 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37935 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37936 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37937 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37938 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37939 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37940 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37941 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37942 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37943 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37944 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37945 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37946 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37947 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37948 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37949 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37950 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37951 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37952 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37953 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37954 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37955 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37956 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37957 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37958 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37959 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37960 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37961 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37962 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37963 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37964 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37965 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37966 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37967 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37968 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37969 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37970 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37971 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37972 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37973 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37974 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37975 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			37976 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37977 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37978 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37979 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37980 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37981 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37982 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37983 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37984 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37985 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37986 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37987 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37988 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37989 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37990 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37991 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37992 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37993 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37994 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37995 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37996 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37997 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37998 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			37999 => [
				'validator'                => new IsInInterfaceConstantsArrayValidator(Values::INTERFACE_NAME_1),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
