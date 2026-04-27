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

/**
 * Represents a data provider providing validators with value and expected validation result.
 * @package codekandis/toolkit
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValidatorsWithValueAndExpectedValidationResultDataProvider0050 implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			50000 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50001 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50002 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50003 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50004 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50005 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50006 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50007 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50008 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50009 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50010 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50011 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50012 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50013 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50014 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50015 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50016 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50017 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50018 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50019 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50020 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50021 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50022 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50023 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50024 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50025 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50026 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50027 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50028 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50029 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50030 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50031 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50032 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50033 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50034 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50035 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50036 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50037 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50038 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50039 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50040 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50041 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50042 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50043 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50044 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50045 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50046 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50047 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50048 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50049 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50050 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50051 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50052 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50053 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50054 => [
				'validator'                => new IsInterfaceNameArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50055 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50056 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50057 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50058 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50059 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50060 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50061 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50062 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50063 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50064 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50065 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50066 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50067 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50068 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50069 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50070 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50071 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50072 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50073 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50074 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50075 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50076 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50077 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50078 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50079 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50080 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50081 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50082 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50083 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50084 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50085 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50086 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50087 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50088 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50089 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50090 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50091 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50092 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50093 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50094 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50095 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50096 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50097 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50098 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50099 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50100 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50101 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50102 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50103 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50104 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50105 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50106 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50107 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50108 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50109 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50110 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50111 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50112 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50113 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50114 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50115 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50116 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50117 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50118 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50119 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50120 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50121 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50122 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50123 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50124 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50125 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50126 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50127 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50128 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50129 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50130 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50131 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50132 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50133 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50134 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50135 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50136 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50137 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50138 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50139 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50140 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50141 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50142 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50143 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50144 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50145 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50146 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50147 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50148 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50149 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50150 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50151 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50152 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50153 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50154 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50155 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50156 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50157 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50158 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50159 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50160 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50161 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50162 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50163 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50164 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50165 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50166 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50167 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50168 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50169 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50170 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50171 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50172 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50173 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50174 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50175 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50176 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50177 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50178 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50179 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50180 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50181 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50182 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50183 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50184 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50185 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50186 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50187 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50188 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50189 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50190 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50191 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50192 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50193 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50194 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50195 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50196 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50197 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50198 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50199 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50200 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50201 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50202 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50203 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50204 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50205 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50206 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50207 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50208 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50209 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50210 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50211 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50212 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50213 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50214 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50215 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50216 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50217 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50218 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50219 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50220 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50221 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50222 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50223 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50224 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50225 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50226 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50227 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50228 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50229 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50230 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50231 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50232 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50233 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50234 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50235 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50236 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50237 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50238 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50239 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50240 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50241 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50242 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50243 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50244 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50245 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50246 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50247 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50248 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50249 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50250 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50251 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50252 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50253 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50254 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50255 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50256 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50257 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50258 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50259 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50260 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50261 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50262 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50263 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50264 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50265 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50266 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50267 => [
				'validator'                => new IsInterfaceNameValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50268 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50269 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50270 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50271 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50272 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50273 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50274 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50275 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50276 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50277 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50278 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50279 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50280 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50281 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50282 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50283 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50284 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50285 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50286 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50287 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50288 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50289 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50290 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50291 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50292 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50293 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50294 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50295 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50296 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50297 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50298 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50299 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50300 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50301 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50302 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50303 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50304 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50305 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50306 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50307 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50308 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50309 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50310 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50311 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50312 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50313 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50314 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50315 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50316 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50317 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50318 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50319 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50320 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50321 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50322 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50323 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50324 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50325 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50326 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50327 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50328 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50329 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50330 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50331 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50332 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50333 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50334 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50335 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50336 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50337 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50338 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50339 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50340 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50341 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50342 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50343 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50344 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50345 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50346 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50347 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50348 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50349 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50350 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50351 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50352 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50353 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50354 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50355 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50356 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50357 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50358 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50359 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50360 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50361 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50362 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50363 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50364 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50365 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50366 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50367 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50368 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50369 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50370 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50371 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50372 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50373 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50374 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50375 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50376 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50377 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50378 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50379 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50380 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50381 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50382 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50383 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50384 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50385 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50386 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50387 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50388 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50389 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50390 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50391 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50392 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50393 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50394 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50395 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50396 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50397 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50398 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50399 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50400 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50401 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50402 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50403 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50404 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50405 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50406 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50407 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50408 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50409 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50410 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50411 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50412 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50413 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50414 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50415 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50416 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50417 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50418 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50419 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50420 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50421 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50422 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50423 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50424 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50425 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50426 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50427 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50428 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50429 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50430 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50431 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50432 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50433 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50434 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50435 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50436 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50437 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50438 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50439 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50440 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50441 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50442 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50443 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50444 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50445 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50446 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50447 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50448 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50449 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50450 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50451 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50452 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50453 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50454 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50455 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50456 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50457 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50458 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50459 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50460 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50461 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50462 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50463 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50464 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50465 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50466 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50467 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50468 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50469 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50470 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50471 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50472 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50473 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50474 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50475 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50476 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50477 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50478 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50479 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50480 => [
				'validator'                => new IsInterfaceOrClassNameArrayValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50481 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50482 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50483 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50484 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50485 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50486 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50487 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50488 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50489 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50490 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50491 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50492 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50493 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50494 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50495 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50496 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50497 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50498 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50499 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50500 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50501 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50502 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50503 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50504 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50505 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50506 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50507 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50508 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50509 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50510 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50511 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50512 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50513 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50514 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50515 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50516 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50517 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50518 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50519 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50520 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50521 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50522 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50523 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50524 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50525 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50526 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50527 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50528 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50529 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50530 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50531 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50532 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50533 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50534 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50535 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50536 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50537 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50538 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50539 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50540 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50541 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50542 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50543 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50544 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50545 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50546 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50547 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50548 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50549 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50550 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50551 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50552 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50553 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50554 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50555 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50556 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50557 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50558 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50559 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50560 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50561 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50562 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50563 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50564 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50565 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50566 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50567 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50568 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50569 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50570 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50571 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50572 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50573 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50574 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50575 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50576 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50577 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50578 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50579 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50580 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50581 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50582 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50583 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50584 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50585 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50586 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50587 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50588 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50589 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50590 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50591 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50592 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50593 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50594 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50595 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50596 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50597 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50598 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50599 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50600 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50601 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50602 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50603 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50604 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50605 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50606 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50607 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50608 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50609 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50610 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50611 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50612 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50613 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50614 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50615 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50616 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50617 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50618 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50619 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50620 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50621 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50622 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50623 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50624 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50625 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50626 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50627 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50628 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50629 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50630 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50631 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50632 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50633 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50634 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50635 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50636 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50637 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50638 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50639 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50640 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50641 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50642 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50643 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50644 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50645 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50646 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50647 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50648 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50649 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50650 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50651 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50652 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50653 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50654 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50655 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50656 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50657 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50658 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50659 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50660 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50661 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50662 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50663 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50664 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50665 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50666 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50667 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50668 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50669 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50670 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50671 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50672 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50673 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50674 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50675 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50676 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50677 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50678 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50679 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50680 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50681 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50682 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50683 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50684 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50685 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50686 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50687 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50688 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50689 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50690 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50691 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50692 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50693 => [
				'validator'                => new IsInterfaceOrClassNameValidator(),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50694 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50695 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50696 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50697 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50698 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50699 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50700 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50701 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50702 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50703 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50704 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50705 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50706 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50707 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50708 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50709 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50710 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50711 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50712 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50713 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50714 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50715 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50716 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50717 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50718 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50719 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50720 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50721 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50722 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50723 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50724 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50725 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50726 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50727 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50728 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50729 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50730 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50731 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50732 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50733 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50734 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50735 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50736 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50737 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50738 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50739 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50740 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50741 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50742 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50743 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50744 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50745 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50746 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50747 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50748 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50749 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50750 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50751 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50752 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50753 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50754 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50755 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50756 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50757 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50758 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50759 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50760 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50761 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50762 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50763 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50764 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50765 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50766 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50767 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50768 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50769 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50770 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50771 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50772 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50773 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50774 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50775 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50776 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50777 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50778 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50779 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50780 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50781 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50782 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50783 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50784 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50785 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50786 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50787 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50788 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50789 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50790 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50791 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50792 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50793 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50794 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50795 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50796 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50797 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50798 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50799 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50800 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50801 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50802 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTEGER_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50803 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50804 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50805 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50806 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50807 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50808 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50809 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50810 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50811 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50812 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50813 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50814 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::STRING_BACKED_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50815 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50816 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50817 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50818 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50819 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50820 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50821 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50822 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50823 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50824 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50825 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50826 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50827 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50828 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CONCRETE_INTERFACE_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50829 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50830 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_INTERFACE_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50831 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50832 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50833 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50834 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50835 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50836 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50837 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50838 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_CLASS_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50839 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50840 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50841 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50842 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50843 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50844 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50845 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50846 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::NONEXISTENT_TRAIT_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50847 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50848 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50849 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50850 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_OR_CLASS_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50851 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50852 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50853 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50854 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_OR_ENUM_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50855 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50856 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50857 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50858 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INTERFACE_CLASS_ENUM_OR_TRAIT_NAME_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50859 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_BINARY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50860 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_INTEGER_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50861 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_FLOAT_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50862 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::REG_EX_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50863 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INVALID_REG_EX_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50864 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::INVALID_REG_EX_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50865 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50866 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50867 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50868 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50869 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50870 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeImmutableObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50871 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50872 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50873 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50874 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50875 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50876 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50877 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50878 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50879 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50880 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50881 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50882 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateTimeZoneObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50883 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50884 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50885 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50886 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50887 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50888 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createDateIntervalObjectMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50889 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50890 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50891 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50892 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50893 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50894 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createConcreteInterfaceFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50895 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixture1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50896 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixture2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50897 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50898 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50899 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureMixedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50900 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createClassFixtureMixedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50901 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMixedValuesArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50902 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMixedValuesArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50903 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedArray1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50904 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedArray2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50905 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedObject1(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50906 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_BINARY_STRING),
				'value'                    => Values::createMappedObject2(),
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50907 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50908 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50909 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50910 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::NULL_STRING_ARRAY,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50911 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::EMPTY_STRING,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50912 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50913 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50914 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50915 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50916 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50917 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50918 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50919 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50920 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50921 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50922 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50923 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50924 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50925 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50926 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50927 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50928 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50929 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50930 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_FALSE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50931 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_TRUE,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50932 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50933 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50934 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50935 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BOOLEAN_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50936 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50937 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50938 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50939 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50940 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50941 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::BINARY_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50942 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50943 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50944 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50945 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50946 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50947 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50948 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50949 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50950 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50951 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50952 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50953 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::INTEGER_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_TRUE
			],
			50954 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50955 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50956 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50957 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50958 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50959 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50960 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_24,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50961 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_42,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50962 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50963 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50964 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50965 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::FLOAT_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50966 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50967 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50968 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50969 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50970 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50971 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50972 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50973 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50974 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50975 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50976 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50977 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_STRING_WITH_NULL_BYTES_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50978 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50979 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIME_FORMAT_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50980 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50981 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50982 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50983 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50984 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50985 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATE_TIMEZONE_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50986 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50987 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50988 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50989 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50990 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50991 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::DATEINTERVAL_STRING_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50992 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50993 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50994 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50995 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50996 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50997 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_MIXED_ARRAY_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50998 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_1,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			],
			50999 => [
				'validator'                => new IsMatchingRegularExpressionArrayValidator(Values::REG_EX_INTEGER_STRING),
				'value'                    => Values::ENUM_NAME_2,
				'expectedValidationResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
